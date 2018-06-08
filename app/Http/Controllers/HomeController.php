<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Gallery;
use Illuminate\Support\Facades\Input;
use Newsletter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Requests\UserUpdateRequest;
use App\PaginationCounter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $title = 'Dashboard';
        $topProjects = Project::orderBy('downloads', 'desc')->limit(5)->get();
        $topImages = Gallery::orderBy('downloads', 'desc')->limit(5)->get();
        return view('admin.admin_dashboard',compact('title','topProjects','topImages'));
    }

    // public function index()
    // {
    //     $title = 'Admin';
    //     return view('admin.sidebar',compact('title'));
    // }

    public function show()
    {
        $title = 'Administrators';
         $admins = User::Role('admin')->latest()->get();
         return view('admin.administrators',compact('admins','title'));
    }

    public function edit($id)
    {
        $title = 'Edit';
        $admins = User::findOrFail($id);
        return view('admin.edit_admin',compact('admins','title'));
    }

    public function editPic($id)
    {
        $title = 'Change profile pic';
        $admins = User::findOrFail($id);
        return view('admin.edit_admin_pic',compact('admins','title'));
    }

    public function editPassword($id)
    {
        $title = 'Change password';
        $admins = User::findOrFail($id);
        return view('admin.update_admin_password',compact('admins','title'));
    }


    public function update($id, UserUpdateRequest $request)
    {    
        $this->validate(request(), [
            'name'  => 'required',
            'email' => 'required',
        ]);    
        $admins = User::findOrFail($id);

        $admins->name = request('name');
        $admins->email = request('email');
        $admins->save();
        $request->session()->flash('success', "{$admins->name}".' updated');
        return back()->withInput($request->all());
    
        $request->session()->flash('failure', 'Please enter the right credentials');
        return back()->withInput($request->all());      
    }

    public function updatePassword($id, UserUpdateRequest $request)
    {   
        $this->validate(request(), [
            'password'  => 'required',
        ]);     
        $admins = User::findOrFail($id);
        $hashedPassword = $admins->password;
        if (Hash::check($request->old, $hashedPassword)) {
        $admins->fill(['password' => Hash::make($request->password)]);
        $admins->save();
        $request->session()->flash('success', 'Password changed');
        return back()->withInput($request->all());
        }
        $request->session()->flash('failure', 'Please enter the right credentials');
        return back()->withInput($request->all());      
    }

    public function updatePic($id, UserUpdateRequest $request)
    {  
        $this->validate(request(), [
            'avatar'  => 'required',
        ]);      
        $admins = User::findOrFail($id);
        $profiles_storage = public_path('storage/profiles/');
        Storage::delete('storage/profiles/'.$admins->profile);
        $profile = request()->file('avatar');
        // $profile->store('profiles');
        $admins->profile = $profile->hashName();
        $image = Image::make($profile->getRealPath());
        $image->resize(null, 240, function ($constraint) {
        $constraint->aspectRatio();})->save($profiles_storage.$profile->hashName());
        $admins->save();
        $request->session()->flash('success', 'Profile pic changed');
        return back()->withInput($request->all());
        
        $request->session()->flash('failure', 'Please enter the right credentials');
        return back()->withInput($request->all());      
    }

    public function destroy($id)
    {
        $admins = User::find($id);
        if ($admins->profile!='df') {
             $admins->delete();
            Storage::move('storage/profiles/'.$admins->profile, 'storage/trash/'.$admins->profile);
            session()->flash('message',"{$admins->name}".' sent to Trash');
            return back();
        }
        else
           $admins->delete();
            session()->flash('message',"{$admins->name}".' sent to Trash');
            return back();
        }

    public function delete_all(){
            $deleted_admins = User::onlyTrashed()->forcedelete();
            $deleted_projects = Project::onlyTrashed()->forcedelete();
            $deleted_images = Gallery::onlyTrashed()->forcedelete();
            $items = Storage::allFiles('storage/trash');
            $items2 = Storage::allFiles('storage/galleries');
            $items3 = Storage::allFiles('storage/gallery_thumbnails');
            $items4 = Storage::allFiles('storage/large_photos');
            $items5 = Storage::allFiles('storage/medium_photos');
            $items6 = Storage::allFiles('storage/mobile_photos');
            $items7 = Storage::allFiles('storage/tiny_photos');
            Storage::delete($items);
            Storage::delete($items2);
            Storage::delete($items3);
            Storage::delete($items4);
            Storage::delete($items5);
            Storage::delete($items6);
            Storage::delete($items7);
            session()->flash('message','Trash emptied');
            return back();
        }

    public function empty_gallery(){
            // $gallery = Gallery::latest()->forcedelete();
            // $allImages = Storage::allFiles('galleries');
            $allImagess = Storage::allFiles('gallery_thumbnails');
            // Storage::delete($allImages);
            Storage::delete($allImagess);
            session()->flash('message','Gallery emptied');
            return back();
        }

    public function trash(){
         // $title = 'Trash';
         // $deleted_admins = User::onlyTrashed()->get();
         // $deleted_projects = Project::onlyTrashed()->get();
         // $deleted_images = Gallery::onlyTrashed()->get();
         // if ((count($deleted_admins)<=0) && (count($deleted_projects)<=0) && (count($deleted_images)<=0)) {
         //     return view('admin.empty_trash',compact('title'));
         // }
         // else if ((!$deleted_admins) && (!$deleted_images) && (count($deleted_projects)>0)) {
         //              return view('admin.trash',compact('deleted_projects','title'));

         // }
         // else if ((count($deleted_admins)>0) && (!$deleted_projects) && (!$deleted_images)) {
         //              return view('admin.trash',compact('deleted_admins','title'));

         // }
         // else if ((!$deleted_admins) && (!$deleted_projects) && (count($deleted_images)>0)) {
         //              return view('admin.trash',compact('deleted_images','title'));
         // }
         // else
         // return view('admin.trash',compact('deleted_admins','deleted_projects','deleted_images','title'));
        dd(Storage::allFiles('storage/galleries'));
    }

    public function permanently_delete_admin($id){
        $deleted_admins = User::onlyTrashed()->find($id);
        Storage::delete('storage/trash/'.$deleted_admins->profile);
        $deleted_admins -> forceDelete();
        session()->flash('message',"{$deleted_admins->name}".' was permanently deleted');
        return back();
    }

    public function restore_deleted_admin($id){
        $deleted_admins = User::onlyTrashed()->find($id);
            if ($deleted_admins->profile!='df') {
                $deleted_admins -> restore();
                Storage::move('storage/trash/'.$deleted_admins->profile, 'storage/profiles/'.$deleted_admins->profile);
                session()->flash('message',"{$deleted_admins->name}".' restored');
                return back();
            }
            else
                $deleted_admins -> restore();
                session()->flash('message',"{$deleted_admins->name}".' restored');
                return back();
            }

    public function empty_trash(){
        return view('admin.empty_trash');
    }

    public function adminer()
    {
        return view('/adminer');
    }

    public function galleryIndex()
    {

        $title = 'Gallery';
        $paginationNr = PaginationCounter::first();
        $galleryNr = $paginationNr->gallery;
        $gallery = Gallery::orderBy('id', 'desc')->Paginate($galleryNr);
        if (count($gallery)<=0) 
            return view('admin.empty_trash',compact('title'));
        else
        return view('admin.gallery', compact('title','gallery'));
    }

    public function adminDestroy($id)
        {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            $gallery->favorites()->delete();
            Storage::move('storage/galleries/'.$gallery->image, 'storage/trash/'.$gallery->image);
            Storage::move('storage/large_photos/'.'large-'.$gallery->gallery_image, 
                            'storage/trash/'.'large-'.$gallery->gallery_image);
            Storage::move('storage/medium_photos/'.'medium-'.$gallery->gallery_image, 
                            'storage/trash/'.'medium-'.$gallery->gallery_image);
            Storage::move('storage/mobile_photos/'.'mobile-'.$gallery->gallery_image, 
                            'storage/trash/'.'mobile-'.$gallery->gallery_image);
            Storage::move('storage/tiny_photos/'.'tiny-'.$gallery->gallery_image, 
                            'storage/trash/'.'tiny-'.$gallery->gallery_image);
            session()->flash('message','Image sent to Trash');
            return back();
        }

    public function permanently_delete_image($id){
        $deleted_images = Gallery::onlyTrashed()->find($id);
        Storage::delete('storage/trash/'.$deleted_images->gallery_image);
        Storage::delete('storage/trash/'.'large-'.$deleted_images->gallery_image);
        Storage::delete('storage/trash/'.'medium-'.$deleted_images->gallery_image);
        Storage::delete('storage/trash/'.'mobile-'.$deleted_images->gallery_image);
        Storage::delete('storage/trash/'.'tiny-'.$deleted_images->gallery_image);
        $deleted_images->forceDelete();
        $deleted_images->favorites()->forceDelete();
        session()->flash('message','Image was permanently deleted');
        return back();
    }

    public function restore_deleted_image($id){
        $deleted_images = Gallery::onlyTrashed()->find($id);
        Storage::move('storage/trash/'.$deleted_images->image, 'storage/galleries/'.$deleted_images->image);

            Storage::move('storage/trash/'.'large-'.$deleted_images->gallery_image, 
                            'storage/large_photos/'.'large-'.$deleted_images->gallery_image);

            Storage::move('storage/trash/'.'medium-'.$deleted_images->gallery_image, 
                            'storage/medium_photos/'.'medium-'.$deleted_images->gallery_image);

            Storage::move('storage/trash/'.'mobile-'.$deleted_images->gallery_image, 
                            'storage/mobile_photos/'.'mobile-'.$deleted_images->gallery_image);

            Storage::move('storage/trash/'.'tiny-'.$deleted_images->gallery_image, 
                            'storage/tiny_photos/'.'tiny-'.$deleted_images->gallery_image);

        $deleted_images -> restore();
        $deleted_images->favorites()->restore();
        // Storage::move('trash/'.$deleted_images->zip_file, 'zip_files/'.$deleted_images->zip_file);
        session()->flash('message','Image restored');
        return back();
    }

}
