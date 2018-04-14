<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\App_color;
use Auth;
use App\User;
use App\PaginationCounter;
use Illuminate\support\Facades\Input;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use App\Skill;
// use App\Banner_text;

class SettingsController extends Controller
{

	public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }
	
  

    public function index(){
        $title = 'Settings';
        $item = App_color::first();
        $paginationNr = PaginationCounter::first();
        $color = $item->app_color;
        $userRoles = User::role('admin')->get();
        $AdminPermissions = Role::findByName('admin')->permissions()->get();
        $UserPermissions = Role::findByName('user')->permissions()->get();
        $permissions = Permission::latest()->get();
        return view('admin.settings',compact('title','item','paginationNr','userRoles','AdminPermissions','UserPermissions','permissions'));
    }

    public function change_color($id,Request $request){

        $this->validate(request(), [
            'app_color' => 'required|max:50',
            'font_color' => 'required|max:50',
        ]);

        $item = App_color::findOrFail($id);
        $item->app_color = request('app_color');
        $item->font_color = request('font_color');
        $item->update();
        session()->flash('message','Color changed');
        return back();
    }
    public function setAppPaginations($id, Request $request){

        $this->validate(request(), [
            'projects'    => 'required',
            'gallery'     => 'required',
            'subscribers' => 'required',
        ]);

        $paginationNr = PaginationCounter::findOrFail($id);
        $paginationNr->projects = request('projects');
        $paginationNr->gallery = request('gallery');
        $paginationNr->subscribers = request('subscribers');
        $paginationNr->update();
        session()->flash('message','Pagination number changed');
        return back();
        
    }

    public function createRole()
    {
        $requestRole = request('name');
        $role = Role::create(['name' => $requestRole ]);
        session()->flash('message','Role created');
        return back();
    }

    public function create_user_role()
    {
        $role = Role::create(['name' => 'user' ]);
        $role->givePermissionTo('access_users');
        session()->flash('message','Role created');
        return back();
    }

    public function create_permission()
    {
        $this->validate(request(), [
            'name'    => 'required',
        ]);

        $name = request('name');
        $permission = Permission::create(['name' => $name ]);
        session()->flash('message','Permission created');
        return back();
    }

    public function givePermissionToAuthorizedUser()
    {
        $permission = request('name');
        $role1 = request('role');
        $role = Role::findByName($role1);
        $role->givePermissionTo($permission);
        session()->flash('message','You gave a permission to a role');
        return back();
    }

    public function givePermissionToUser()
    {
        $permission = request('name');
        $role = Role::findByName('user');
        $role->givePermissionTo($permission);
        session()->flash('message','You gave a permission to user');
        return back();
    }

    public function revokePermissionToAdmin($id)
    {
        $role = Role::findByName('admin');
        $permission = Permission::findOrFail($id);
        $role->revokePermissionTo($permission);
        session()->flash('message','Admin permission revoked');
        return back();
    }

    public function revokePermissionToUser($id)
    {
        $role = Role::findByName('user');
        $permission = Permission::findOrFail($id);
        $role->revokePermissionTo($permission);
        session()->flash('message','User permission revoked');
        return back();
    }
    public function deletePermissions($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        session()->flash('message','Permission removed');
        return back();
    }
}








  // public function upload(){

       //  $file= request()->file('avatar');

       //  $file->storeAs('images/',"cover.jpg");

    //     session()->flash('message','Banner image changed');

       // return back();
   
    // }

//    public function create_skill(){

 //        $title = 'Skills';
 //        $skills = Skill::latest()->get();
 //         return view('admin.skills',compact('skills','title'));

 //    }

 //     public function banner_text(){
        
 //     $banner_text = Banner_text::all();
 //     return view('banner_text',compact('banner_text'));
 //    }
    
    // public function edit($id)
    // {
    //  $banner_text = Banner_text::findOrFail($id);
    //  return view('admin.edit_banner_text',compact('banner_text'));
    // }

    // public function update($id,Request $request){

    //  $banner_text = Banner_text::findOrFail($id);
    //  $banner_text -> user_id = auth()->id();
    //  $banner_text -> primary_text = request('primary_text');
    //  $banner_text -> name = request('name');
    //  $banner_text -> secondary_text = request('secondary_text');
    //  $banner_text -> update();
    //     session()->flash('message','Banner text updated');
    //  return back()->withInput($request->all());

    // }

    // public function check_store_method(Request $request)
    // {

    //     if (Input::get('store_return')) 
    //         {
    //             $this->store_skill($request);
    //             session()->flash('message','Skill created.Add a new one');
    //             return back();
    //         }
    //     elseif(Input::get('store'))
    //         {
    //             $this->store_skill($request);
    //             session()->flash('message','Skill created');
    //             return redirect('admin/settings');
    //         }
    // }

    // public function store_skill(Request $request){

    //     $this->validate(request(), [
    //         'icon' => 'required|max:50',
    //         'name' => 'required|max:50',
    //         'description' => 'required|max:255',
    //     ]);

    //     $skills = new Skill;
    //     $skills->icon = request('icon');
    //     $skills->name = request('name');
    //     $skills->description = request('description');
    //     $skills->save();
        
    // }

    // public function destroy($id)
    // {
    //     $skill  = Skill::find($id);
    //     $skill  ->forceDelete();
    //     session()->flash('message',"{$skill->name}".' removed');
    //     return back();
    // }

    // public function edit_skill($id){
    //     $title = 'Edit';
    //     $edit_skills = Skill::findOrFail($id);
    //     return view('admin.edit_skills',compact('edit_skills','title'));
    // }

    // public function update_skill($id,Request $request){
    //     $edit_skills = Skill::findOrFail($id);
    //     $edit_skills->icon = request('icon');
    //     $edit_skills->name = request('name');
    //     $edit_skills->description = request('description');
    //     $edit_skills->update();
    //     session()->flash('message',"{$edit_skills->name}".' updated');
    //     return redirect('admin/settings/skills');
    // }