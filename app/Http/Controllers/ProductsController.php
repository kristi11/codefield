<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Alert;
use App\Project;
use App\Category;
use Auth;
use File;
use App\PaginationCounter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Mail\ProjectPublished;
use App\Notifications\ProjectApproved;
use App\Notifications\ProjectRejected;
use App\SubmitRequest;
use Purify;

class ProductsController extends Controller
{

public function __construct()
    {
        $this->middleware('role:user');
    }

 //    public function index(){
 //    	$projects = Project::latest()->get();
 //    	return view('projects.index',compact('projects'));

 //    }
 // public function show($id){

	//     $projects=Project::find($id);
	//     return view('show',compact('projects'));

 //    }

    public function create(){

        $title = 'Post a product';
        $categories = Category::select('name','id')->get();
    	return view('client.create',compact('title','categories'));

    }

    public function store(Request $request){

        $this->validate(request(), [
            'title'    => 'required',
            'body'     => 'required',
            'categories'  => 'required|array|min:1',
            'avatar'   => 'required|mimes:jpeg,png',
        ]);
        $user = User::all();
        $profiles_storage = 'storage/avatars/';
        $zip_files_storage = 'storage/zip_files/';
        $project =  new Project;
        $project -> user_id = auth()->id();
        $project -> dsc_title = request('title');
        $project -> title = str_slug(request('title').'-'.uniqid());
        $project -> body = request(Purify::clean('body'));
        $project -> tutorial = request('tutorial');
        $project -> views = '0';
        $project -> downloads = '0';
        $project -> alternative_text = request('title').' '.'project on'.' '.config('app.name') ;
        $profile = request()->file('avatar');
        // $profile->store('profiles');
        $project->image = $profile->hashName();
        $image = Image::make($profile->getRealPath());
        $image->fit(640, 360, function ($constraint)
        { $constraint->upsize();})->save($profiles_storage.$profile->hashName(),85)
        ->resize(10, null, function ($constraint) {
        $constraint->aspectRatio();
        })->blur(1)->save($profiles_storage.'placeholder-'.$profile->hashName(),85);
        if ( request()-> file('zip_file')) {
            request()-> file('zip_file')->store('storage/zip_files/');
            $project -> zip_file = request()->file('zip_file')->hashName();
        }
        $project -> save();
        $category = $request->input('categories');
        $project->categories()->sync($category);
        foreach ($user as $u) {
            if ($u->email_notifications != 0) {
            // $u->notify(new ProjectPublished($project));
                \Mail::to($u)->send(new ProjectPublished($project,$u));
        }
        }

        session()->flash('message',"{$project->dsc_title}".' created');
    	return back();
    }

    // public function userProjects(){
    //     // return session('message');
    //     $title = 'Your projects';
    //     $paginationNr = PaginationCounter::first();
    //     $projectsNr = $paginationNr->projects;

    // 	$projects = Project::orderBy('id', 'desc')->Paginate($projectsNr);
    //     if (count($projects)<=0)
    //     {
    //         return view('admin.empty_projects',compact('title'));
    //     }
    //     else if (Auth::user()->hasPermissionTo('edit_projects')) {

    //             return view('admin.projects',compact('projects','title'));
    //     }
    //     else return view('admin.noPermission',compact('title'));
    // }

    public function edit($id)
    {
        $title = 'Edit product';
        $project = Project::findOrFail($id);
        $categories = $project->categories;
        $allCategories = Category::select('name','id')->get();
        return view('client.edit',compact('project','title','categories','allCategories'));
    }

     public function editPAvatar($id)
    {
        $title = 'Update product image';
        $project = Project::findOrFail($id);
        $categories = $project->categories;
        $allCategories = Category::select('name','id')->get();
        return view('client.editPAvatar',compact('project','title','categories','allCategories'));
    }

    public function editPFile($id)
    {
        $title = 'update product file';
        $project = Project::findOrFail($id);
        $categories = $project->categories;
        $allCategories = Category::select('name','id')->get();
        return view('client.editPFile',compact('project','title','categories','allCategories'));
    }

    public function update($id, Request $request)
    {
         $this->validate(request(), [
            'title'    => 'required',
            'body'     => 'required'
        ]);

        $profiles_storage = public_path('storage/avatars/');
        $project =  Project::findOrFail($id);
        $project -> user_id = auth()->id();
        $project -> dsc_title = request('title');
        // $project -> title = str_slug(request('title').'-'.uniqid());
        $project -> body = request('body');
        $project -> tutorial = request('tutorial');
        $project -> alternative_text = config('app.name').' '.request('title').' '.'project';
        $project -> save();
        $category = $request->input('categories');
        $project->categories()->sync($category);
        session()->flash('message',"{$project->dsc_title}".' was updated');
        return back()->withInput(Input::all());
    }

    public function updatePAvatar($id, Request $request)
    {
         $this->validate(request(), [
            'avatar'   => 'required|mimes:jpeg,png',
        ]);

        $profiles_storage = public_path('storage/avatars/');
        $project =  Project::findOrFail($id);
        Storage::delete('storage/avatars/'.$project->image);
        Storage::delete('storage/avatars/'.'placeholder-'.$project->image);
        $project -> user_id = auth()->id();
        request()-> file('avatar')->store('storage/avatars');
        $project -> image = request()->file('avatar')->hashName();
        $profile = request()->file('avatar');
        $project->image = $profile->hashName();
        $image = Image::make($profile->getRealPath());
        $image->fit(640, 360, function ($constraint)
        {$constraint->upsize();})->save($profiles_storage.$profile->hashName(),85)
        ->resize(10, null, function ($constraint) {
        $constraint->aspectRatio();
        })->blur(1)->save($profiles_storage.'placeholder-'.$profile->hashName(),85);
        $project -> save();
        // $category = $request->input('categories');
        // $project->categories()->sync($category);
        session()->flash('message','Photo was updated');
        return back()->withInput(Input::all());
    }

    public function updatePFile($id, Request $request)
    {
         $this->validate(request(), [
            'zip_file' => 'required|mimes:zip,rar'
        ]);

        $project =  Project::findOrFail($id);
        if ($project->zip_file) {
            Storage::delete('storage/zip_files/'.$project->zip_file);
        }
        $project -> user_id = auth()->id();
        request()-> file('zip_file')->store('storage/zip_files/');
        $project -> zip_file = request()->file('zip_file')->hashName();
        $project -> save();
        // $category = $request->input('categories');
        // $project->categories()->sync($category);
        session()->flash('message','File was updated');
        return back()->withInput(Input::all());
    }

    // public function delete_all(){
    //     $deleted_projects = Project::onlyTrashed()->forcedelete();
    //     $data = Storage::allFiles('project_trash');
    //     Storage::delete($data);
    //     session()->flash('message','All projects were permanently deleted');
    //     return back();
    // }

    // public function destroy($id)
    // {
    //     $project = Project::findOrFail($id);
    //     $project->delete();
    //     $project->favorites()->delete();
    //     public_path(Storage::move('storage/avatars/'.$project->image, 'storage/trash/'.$project->image));
    //     public_path(Storage::move('storage/avatars/'.'placeholder-'.$project->image,
    //                                 'storage/trash/'.'placeholder-'.$project->image));
    //     public_path(Storage::move('storage/zip_files/'.$project->zip_file, 'storage/trash/'.$project->zip_file));
    //     session()->flash('message',"{$project->title}".' sent to Trash');
    //     if (request()->expectsJson()){
    //         return response(['status' => 'reply deleted']);
    //     }
    //     return back();
    //     // dd(Storage::url('avatars/'.$project->image));
    // }

    public function delete_product($id){
        $projects = Project::find($id);
        $projects->forceDelete();
        $projects->favorites()->forceDelete();
        Storage::delete('storage/avatars/'.$projects->image);
        Storage::delete('storage/avatars/'.'placeholder-'.$projects->image);
        if($projects->zip_file){
        Storage::delete('storage/zip_files/'.$projects->zip_file);
		}
        session()->flash('message',"{$projects->dsc_title}".' was deleted');
        return back();
    }

    // public function restore_deleted_project($id){
    //     $deleted_projects = Project::onlyTrashed()->find($id);
    //     $deleted_projects -> restore();
    //     $deleted_projects -> favorites() -> restore();
    //     Storage::move('storage/trash/'.$deleted_projects->image, 'storage/avatars/'.$deleted_projects->image);
    //     Storage::move('storage/trash/'.'placeholder-'.$deleted_projects->image,
    //                     'storage/avatars/'.'placeholder-'.$deleted_projects->image);
    //     Storage::move('storage/trash/'.$deleted_projects->zip_file, 'storage/zip_files/'.$deleted_projects->zip_file);
    //     session()->flash('message',"{$deleted_projects->title}".' restored');
    //     return back();
    // }

    // public function deleted_projects(){
    //     $title = 'Deleted Projects';
    //      $deleted_projects = Project::onlyTrashed()->get();
    //      if (count($deleted_projects)<=0) {
    //         return view('admin.empty_trash',compact('title'));
    //      }
    //      else
    //      return view('admin.deleted_projects',compact('deleted_projects','title'));
    // }

    // public function download($id){

    //     $data = Project::find($id);
    //     $path = storage_path('app\\zip_files\\'.$data->zip_file);
    //     $name = $data->title.'.zip';
    //     return response()->download($path,$name);
    //     return back();

    // }

    // public function search(Request $request){

    //     $this->validate(request(), [
    //         'query'    => 'required',
    //     ]);

    //     $paginationNr = PaginationCounter::first();
    //     $projectsNr = $paginationNr->projects;
    //     $title = 'Search results';
    //     $query = request('query');
    //     $results = Project::search($query)->orderBy('id', 'desc')->paginate($projectsNr);
    //     if (count($results)<=0) {
    //         return view('admin.empty_trash',compact('title'));
    //     }
    //     else if (count($results)==1) {
    //         $class = 'col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3';
    //         return view('admin.search_results',compact('results','title','class'));
    //     }else
    //         $class = 'col-lg-6 col-md-6 col-sm-6';
    //         return view('admin.search_results',compact('results','title','class'));
    // }

    // public function pending_projects(){
    //     $title = 'Submitted Projects';
    //     $projects = SubmitRequest::latest()->paginate(25);
    //     if (count($projects)<=0) {
    //         return view('admin.empty_trash',compact('title'));
    //     }
    //     return view('admin.pending_projects',compact('title','projects'));
    // }

    // public function approve_project($id){
    //     $project = SubmitRequest::findOrFail($id);
    //     $user = User::where('id',$project->user_id)->first();
    //     $project -> status = 'approved';
    //     $project -> save();
    //     $user->notify(new ProjectApproved($project));
    //     session()->flash('message','Project approved');
    //     return back();
    // }

    // public function reject_project($id){
    //     $project = SubmitRequest::findOrFail($id);
    //     $user = User::where('id',$project->user_id)->first();
    //     $project -> status = 'rejected';
    //     $project -> save();
    //     $user->notify(new ProjectRejected($project));
    //     session()->flash('message','Project rejected');
    //     return back();
    // }

}