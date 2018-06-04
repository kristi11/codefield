<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\App_color;
use App\Project;
use App\Gallery;
use App\Tag;
use Carbon\Carbon;
use App\Category;
use Auth;
use Cache;
use App\Favorite;
use App\PaginationCounter;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Notifications\EmailNotificationsEnabled;
use App\Notifications\EmailNotificationsDisabled;
use Illuminate\Support\Facades\Hash;
use App\SubmitRequest;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:user'],['except'=>['signIn','g_photo','g_project','dashboard','privacyPolicy','termsAndConditions','cookiePolicy']]);
    }

    public function dashboard()
    {
        if (Auth::check() && (Auth::user()->hasRole('user'))) {
            # code...
        
                $title = 'Dashboard';
                // $favorites = Favorite::where('user_id',Auth::id())->get();
                $projects = Project::latest()->limit(5)->get();
                $photos = Gallery::latest()->limit(5)->get();
                $latestDbItem = Project::orderBy('created_at', 'desc')->take(2)->get();
                $secondDownDbItem = Project::orderBy('created_at', 'desc')->skip(2)->take(3)->get();
                $latestDbImages = Gallery::orderBy('created_at', 'desc')->take(2)->get();
                $secondDownDbImages = Gallery::orderBy('created_at', 'desc')->skip(2)->take(3)->get();
        //         if (!$countFavorites) {
        //             $countFavorites = 'No Favorites';
        //         }
        // else
        //         $countFavorites;
                return view('client.dashboard',compact('title','latestDbItem','secondDownDbItem','latestDbImages','secondDownDbImages','projects','photos'));
          }

          else  
$projects = Project::orderBy('id', 'desc')->limit(4)->get();
                $photos =  Gallery::orderBy('views', 'desc')->limit(4)->get();
            return view('client.signIn',compact('projects','photos'));
    }

 //    public function signIn()
 //    {
	// 	$projects = Project::orderBy('id', 'desc')->limit(4)->get();
 //        $photos =  Gallery::orderBy('views', 'desc')->limit(4)->get();
 //        return view ('client.signIn', compact('projects','photos'));
	// }

	public function widgets(){

        // $cacheKey = md5(vsprintf('%s.%s', [auth()->user()->id,auth()->user()->email]))

       // return Cache::remember(auth()->user()->id.'articles.all', 60, function ()  {
           $title = 'Projects';
        $paginationNr = PaginationCounter::first();
        $projectsNr = $paginationNr->projects;
        $categories = Category::has('projects')->select('name','id')->get();
        $class = 'col-lg-6 col-md-6 col-sm-6';
        $widgets = Project::with('favorites')->orderBy('id', 'desc')->Paginate($projectsNr);

        if (count($widgets)<=0)
        
            return view('client.empty',compact('title'));
        
        else
        return view('client.widgets',compact('widgets','title','categories','class'));
    // });


    }

	public function showWidget($title){
        // $timer = 720;
        // $cacheKey = md5(auth()->user()->id.auth()->user()->provider_id.auth()->user()->created_at.$title.'client_gallery');
        // return Cache::remember($cacheKey, $timer, function () use($title) {
    	$widget = Project::where('title', $title)->first();
    	$title = $widget->title;
        $category = $widget->categories;
		$file_size = Storage::size('storage/zip_files/'.$widget->zip_file);
		$size = number_format($file_size / 1048576,2);
        if (!in_array($widget->id, session('visited_projects', []))) 
            {
                session()->push('visited_projects', $widget->id);
                $widget->increment('views');
            }
		return view('client.showWidget',compact('widget','title','size','category'))->render();
         // });
	}

    public function gallery(){
        
        $title = 'Photos';
        $paginationNr = PaginationCounter::first();
        $galleryNr = $paginationNr->gallery;
        $tags = Tag::has('Galleries')->select('name','id')->get();

       $gallery = Gallery::with('favorites')->orderBy('id', 'desc')->Paginate($galleryNr);
               

        if (count($gallery)<=0)
        {
            return view('client.empty',compact('title'))->render();
        }
        else
        return view('client.clientGallery',compact('gallery','title','tags'))->render();

    }

    public function showImage($gallery_image){
        // $timer = 720;
        // $cacheKey = md5(auth()->user()->id.auth()->user()->provider_id.auth()->user()->created_at.$gallery_image.'client_gallery');
        // return Cache::remember($cacheKey, $timer, function () use($gallery_image) {
        $title = 'Photo details';
        $gallery = Gallery::where('gallery_image', $gallery_image)->first();
        $gallery_image = $gallery->gallery_image;
        $file_size = Storage::size('storage/galleries/'.$gallery->gallery_image);
        $size = number_format($file_size / 1048576,2);
        $category = $gallery->tags;
        $path = public_path('storage/galleries/');
        list($width,$height) = getimagesize($path.$gallery_image);
        $w = $width; $h = $height;
        // $type=pathinfo($path.$gallery_image, PATHINFO_EXTENSION);
        $type='jpeg';
        if (!in_array($gallery_image, session('visited_images', []))) 
            {
                session()->push('visited_images', $gallery_image);
                $gallery->increment('views');
            }
        return view('client.showImage',compact('gallery','title','size','category','w','h','type'))->render();
        // });
    }



	public function logout(){
    	Auth::logout();
        session()->flush();
    	return redirect('/');
	}
	public function download($id)
    {

        $data = Project::find($id);
        $path = public_path('storage/zip_files/'.$data->zip_file);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $name = $data->title.'.'.$type;
        $data->increment('downloads');
        return response()->download($path,$name);
        return back();

    }

    public function downloadImg($id)
    {

        $data = Gallery::find($id);
        $path = public_path('storage/galleries/'.$data->gallery_image);
        $data->increment('downloads');
        $type='jpeg';
        $name = $data->alternative_text.'.'.$type;
        return response()->download($path,$name);
        return back();

    }

    public function category(Tag $tag)
        {

            $paginationNr = PaginationCounter::first();
            $galleryNr = $paginationNr->gallery;
            $tags = Tag::has('Galleries')->select('name','id')->get();

            if (count($tag->Galleries)>0) {
                $gallery = $tag->Galleries()->with('favorites')->Paginate($galleryNr);
                $title = 'Category: '.$tag->name.' '.'('.count($tag->Galleries).')';
                return view('client.clientGallery',compact('gallery','title','tags'));

            }
                $title = 'No images';
                return view('client.noCategories',compact('gallery','title','tags'));
        }

    public function newestImages()
    {
    $title = 'Newest images';
    $paginationNr = PaginationCounter::first();
    $galleryNr = $paginationNr->gallery;
    $tags = Tag::has('Galleries')->select('name','id')->get();
    $gallery = Gallery::with('favorites')->latest()->Paginate($galleryNr);
    return view('client.clientGallery',compact('gallery','title','tags'));
    }

    public function oldestImages()
    {
    $title = 'Oldest images';
    $paginationNr = PaginationCounter::first();
    $galleryNr = $paginationNr->gallery;
    $tags = Tag::has('Galleries')->select('name','id')->get();
    $gallery = Gallery::with('favorites')->orderBy('id','ASC')->Paginate($galleryNr);
    return view('client.clientGallery',compact('gallery','title','tags'));
    }

    public function mostPopular()
    {
    $title = 'Most popular';
    $paginationNr = PaginationCounter::first();
    $galleryNr = $paginationNr->gallery;
    $tags = Tag::has('Galleries')->select('name','id')->get();
    $gallery = Gallery::with('favorites')->orderBy('views','DESC')->Paginate($galleryNr);
    return view('client.clientGallery',compact('gallery','title','tags'));
    }

    public function trending()
    {
    $title = 'Trending';
    $paginationNr = PaginationCounter::first();
    $galleryNr = $paginationNr->gallery;
    $tags = Tag::has('Galleries')->select('name','id')->get();
    $gallery = Gallery::with('favorites')->where('updated_at', '>=', Carbon::now()->subHours(72))->orderBy('views', 'DESC')->Paginate($galleryNr);
    return view('client.clientGallery',compact('gallery','title','tags'));
    }

    public function notLoggedIn(){
    return view('client.signIn');
    }

    public function googleFonts()
    {
        $title = 'Google Fonts';
        // $result = Cache::remember(auth()->user()->id.'google_fonts', 60, function () use($title)  {
        // $url = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDsCHWKh6jyNvXCJRFgDB2yio9lUCu9O0c";
        //  return json_decode(file_get_contents( $url ));
        //  });
             // Set default page
        $page = request()->has('page') ? request('page') : 1;

        // Set default per page
        $perPage = request()->has('per_page') ? request('per_page') : 25;

        // Offset required to take the results
        $offset = ($page * $perPage) - $perPage;
        $url = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDsCHWKh6jyNvXCJRFgDB2yio9lUCu9O0c";
        $newCollection = collect(json_decode(file_get_contents( $url ),true)['items']);
        // Set custom pagination to result set
        $results = new LengthAwarePaginator(
        $newCollection->slice($offset, $perPage),
        $newCollection->count(),
        $perPage,
        $page,
        ['path' => request()->url(), 'query' => request()->query()]
    );
        return view ('client.googleFonts',compact('results','title'));
    }

    public function addToFavorites($id)
    {
    $user = Auth::user($id);
    $img = Gallery::find($id);
    $widget = Project::find($id);
    if ($img) {
        $user->toggleFavorite($img);
        if ($img->isFavorited()) {
            // $user->removeFavorite($img);
            session()->flash('message','Image favorited');
        }
        else
            { 
                // $user->addFavorite($img);
                session()->flash('message','Image removed from favorites');
            }
    }
    else
    if ($widget) {
        $user->toggleFavorite($widget);
         if ($widget->isFavorited()) {
                session()->flash('message','Project favorited');
            }
            else
                { session()->flash('message','Project removed from favorites');}
     } 
        return back();  
    }

    public function removeFavorites($id)
    {
        $user = Auth::user($id);
    $img = Gallery::find($id);
    // $widget = Project::find($id);
    if ($img) {
        $user->removeFavorite($img);
        // if ($img->isFavorited()) {
        //     $user->removeFavorite($img);
        //     session()->flash('message','Image removed from favorites');
        // }
        // else
        //     { 
        //         $user->addFavorite($img);
        //         session()->flash('message','Image favorited');
        //     }
    }
    
        return back();  
    }

    public function favorites()
    {
    $widgets = Auth::user()->favorite(Project::class);
    $gallery = Auth::user()->favorite(Gallery::class);
    $title = 'Favorites';
    $users = Favorite::where('user_id',Auth::id())->latest()->get(); 

    if($users->isEmpty())
        {
            return view('client.empty',compact('title'));
        }
            return view('client.favorites',compact('widgets','gallery','title'));   
    }

    public function clientSearch(Request $request)
    {

        $this->validate(request(), [
            'query'    => 'required',
        ]);

        $title = 'Search results';
        $paginationNr = PaginationCounter::first();
        $projectsNr = $paginationNr->projects;
        $query = request('query');
        $results = Project::search($query)->orderBy('id', 'desc')->paginate($projectsNr);
        if (count($results)<=0) {
            return view('client.empty',compact('title'));
        }
        else if (count($results)==1) {
            $class = 'col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3';
            return view('client.clientSearchResults',compact('results','title','class'));
        }
        else if (count($results)>1 && count($results)%2==0) {
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.clientSearchResults',compact('results','title','class'));
        }
        else if (count($results)>1 && count($results)%2!=0) {
            $class = 'col-lg-4 col-md-4 col-sm-6';
            return view('client.clientSearchResults',compact('results','title','class'));
        }
        else
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.clientSearchResults',compact('results','title','class'));
    }

    public function mostDownloadedProjects()
        {
            $title = 'Most downloaded';
            $paginationNr = PaginationCounter::first();
            $widgetsNr = $paginationNr->projects;
            $categories = Category::has('projects')->select('name','id')->get();
            $widgets = Project::with('favorites')->orderBy('downloads','DESC')->Paginate($widgetsNr);
            if (count($widgets)==1) 
        {
            $class = 'col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
        else if (count($widgets)>1 && count($widgets)%2==0) {
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
        else if (count($widgets)>1 && count($widgets)%2!=0) {
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }

    public function mostViewedProjects()
    {
        $title = 'Most viewed';
        $paginationNr = PaginationCounter::first();
        $widgetsNr = $paginationNr->projects;
        $categories = Category::has('projects')->select('name','id')->get();
        $widgets = Project::with('favorites')->orderBy('views','DESC')->Paginate($widgetsNr);
        if (count($widgets)==1) 
        {
            $class = 'col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
        else if (count($widgets)>1 && count($widgets)%2==0) {
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
         else if (count($widgets)>1 && count($widgets)%2!=0) {
            $class = 'col-lg-6 col-md-6 col-sm-6';
            return view('client.widgets',compact('widgets','title','categories','class'));
        }
        $class = 'col-lg-6 col-md-6 col-sm-6';
        return view('client.widgets',compact('widgets','title','categories','class'));
    }

    public function projectCategory(Category $category)
        {

            $paginationNr = PaginationCounter::first();
            $projectsNr = $paginationNr->projects;
            $categories = Category::has('projects')->select('name','id')->get();
            $widgets = $category->projects()->with('favorites')->Paginate($projectsNr);
            if (count($category->projects)<=0) {
                 $title = 'No Projects';
                return view('client.noProjectCategories',compact('widgets','title','categories'));

            }           
            else if (count($category->projects)==1) {
                $class = 'col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3';              
                $title = 'Category: '.$category->name.' '.'('.count($category->projects).')';
                return view('client.widgets',compact('widgets','title','categories','class'));
            }
            else if (count($category->projects)>1 && count($category->projects)%2==0) {
                $class = 'col-lg-6 col-md-6 col-sm-6';
                $title = 'Category: '.$category->name.' '.'('.count($category->projects).')';
                return view('client.widgets',compact('widgets','title','categories','class'));
            }
            else if (count($category->projects)>1 && count($category->projects)%2!=0) {
                $class = 'col-lg-4 col-md-4 col-sm-6';
                $title = 'Category: '.$category->name.' '.'('.count($category->projects).')';
                return view('client.widgets',compact('widgets','title','categories','class'));
            }
            else
                $class = 'col-lg-6 col-md-6 col-sm-6';
                $title = 'Category: '.$category->name.' '.'('.count($category->projects).')';
                return view('client.widgets',compact('widgets','title','categories','class'));
        }

    public function emailNotifications($id,Request $request)
    {
        $user =User::find($id);
        if ($user->email_notifications == 0) 
            {
                $user->email_notifications = 1;
                $user->notify(new EmailNotificationsEnabled($user));
                session()->flash('message','Email notifications enabled');
                
            }

        elseif ($user->email_notifications == 1)
            {
                $user->email_notifications = 0;
                $user->notify(new EmailNotificationsDisabled($user));
                session()->flash('message','Email notifications disabled');
            }

                $user->update();

                return back();
    }

    public function privacyPolicy()
    {
        return view('policies.privacyPolicy');
    }

    public function termsAndConditions()
    {
        return view('policies.termsAndConditions');
    }

    public function cookiePolicy()
    {
        return view('policies.cookiePolicy');
    }

    public function license()
    {
        $title = 'License';
        return view('policies.mitLicense',compact('title'));
    }

    public function userProfile($slug){
        $title = "Profile";
        $data = SubmitRequest::where('user_id',auth()->id())->latest()->Paginate(25);
            if (count($data)<=0) {
                $p = "You haven't submitted any projects yet";
                return view('client.partials.userProjects',compact('title','data','p'));
            }
            else
            {
                return view('client.partials.userProjects',compact('title','data'));
            }

    }

    public function userProfilePhotos($slug){
        $title = 'Profile';
        $data = Gallery::where('user_id',auth()->id())->latest()->Paginate(50);
            if (count($data)<=0) {
                $p = "You haven't added any photos yet";
                return view('client.partials.userPhotos',compact('title','data','p'));
            }
            else
            {
                return view('client.partials.userPhotos',compact('title','data'));
            }

    }

        public function searchUserProfile($slug){
        $title = 'Profile';
        $user = User::where('slug',$slug)->first();
        $countUProjects = count(SubmitRequest::where('user_id',$user->id)->get());
        $countUPhotos = count(Gallery::where('user_id',$user->id)->get());
        $data = Gallery::where('user_id',$user->id)->latest()->Paginate(50);
            if (count($data)<=0) {
                $p = $user->name.' '."hasn't added any photos yet";
                return view('client.partials.uPhotos',compact('title','data','p','user','countUProjects','countUPhotos'));
            }
            else
            {
                return view('client.partials.uPhotos',compact('title','data','user','countUProjects','countUPhotos'));
            }

    }

        public function searchUserProjects($slug){
        $title = 'Profile';
        $user = User::where('slug',$slug)->first();
        $countUProjects = count(SubmitRequest::where('user_id',$user->id)->get());
        $countUPhotos = count(Gallery::where('user_id',$user->id)->get());
        $data = SubmitRequest::where('user_id',$user->id)->latest()->Paginate(25);
            if (count($data)<=0) {
                $p = $user->name.' '."hasn't submitted any projects yet";
                return view('client.partials.uProjects',compact('title','data','p','user','countUProjects','countUPhotos'));
            }
            else
            {
                return view('client.partials.uProjects',compact('title','data','user','countUProjects','countUPhotos'));
            }

    }

    public function guidelines(){
        $title = 'Photo guidelines';
        return view('policies.photoGuidelines',compact('title'));
    }

    // public function editProfile($slug){
    //     $title = 'Edit';
    //     $profile = User::find($slug);
    //     return view('client.editClient',compact('title','profile'));
    // }

    // public function updateProfile($slug){
    //     $profile = User::find($slug);
    //     $profile -> website = request('website');
    //     $profile -> github_profile = request('github_profile');
    //     $profile -> save();
    //     session()->flash('message','Profile updated');
    //     return back();
    // }
public function signIn() {
        $projects = Project::orderBy('id', 'desc')->limit(4)->get();
        $photos =  Gallery::orderBy('views', 'desc')->limit(4)->get();
        return view ('client.signIn', compact('projects','photos'));
    }

    // public function show_project() {
    //     $projects = Project::orderBy('id', 'desc')->limit(4)->get();
    //     return view ('client.signIn', compact('projects'));
    // }

    public function g_project($title) {
        $widget = Project::where('title', $title)->first();
        $file_size = Storage::size('storage/zip_files/'.$widget->zip_file);
        $size = number_format($file_size / 1048576,2);
        if (!in_array($widget->id, session('visited_projects', []))) 
            {
                session()->push('visited_projects', $widget->id);
                $widget->increment('views');
            }
        return view('guest.g_project',compact('widget','size'))->render();
    }

    public function g_photo($gallery_image) {
        $gallery = Gallery::where('gallery_image', $gallery_image)->first();
        // $gallery_image = $gallery->gallery_image;
        $file_size = Storage::size('storage/galleries/'.$gallery->gallery_image);
        $size = number_format($file_size / 1048576,2);
        $path = public_path('storage/galleries/');
        list($width,$height) = getimagesize($path.$gallery_image);
        $w = $width; $h = $height;
        $type=header('Content-Type: image/jpeg');
        if (!in_array($gallery->gallery_image, session('visited_images', []))) 
            {
                session()->push('visited_images', $gallery_image);
                $gallery->increment('views');
            }
        return view('guest.g_photo',compact('gallery','size','w','h','type'))->render();
    }
}
