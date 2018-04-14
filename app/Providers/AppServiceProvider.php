<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

         view()->composer(['admin.sidebar','admin.admin_dashboard'],function($view){

            $view->with('countProjects',count(\App\Project::all()));
            $view->with('countAdmins',count(\App\User::Role('admin')->get()));
            $view->with('countSubscribers',count(\App\User::role('user')->get()));
            $view->with('countImages',count(\App\Gallery::all()));
            $view->with('result',json_decode(file_get_contents( "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDsCHWKh6jyNvXCJRFgDB2yio9lUCu9O0c" )));


         });

         view()->composer(['admin.sidebar','admin.empty_projects','admin.gallery','admin.projects','admin.trash','admin.administrators','admin.Subscribers','admin.add','auth.register','auth.login','admin.create','admin.edit','admin.mdl-bootstrap','admin.edit_admin','admin.edit_admin_pic','admin.update_admin_password','admin.edit_tag','admin.edit_category','admin.editUploads','admin.pending_projects',
            'admin.submitted_projects','auth.passwords.email','auth.passwords.reset','client.home','client.showWidget','client.showImage','client.clientGallery','client.googleFonts',
            'client.submit_request','client.submits','client.addPhotos','client.userProfile','client.editClient',
            'client.searchUserProfile','policies.mitLicense'],function($view){
            $view->with('item',\App\App_color::firstOrFail());
         });

         view()->composer(['admin.sidebar','admin.empty_projects','admin.gallery','admin.projects','admin.trash','admin.administrators','admin.Subscribers','admin.add','auth.register','auth.login','admin.create','admin.edit','admin.mdl-bootstrap','admin.edit_admin','admin.edit_admin_pic','admin.update_admin_password','admin.edit_tag','admin.edit_category','admin.editUploads','admin.pending_projects',
            'admin.submitted_projects','auth.passwords.email','auth.passwords.reset'],function($view){
            $view->with('pending_projects',count(\App\SubmitRequest::where('status','pending')->latest()->get()));

         });

         //  view()->composer(['client.home','client.showWidget','client.showImage','client.clientGallery',
         //    'client.googleFonts','client.submit_request','policies.mitLicense'],function($view){
         //    $view->with('submitted_projects',count(\App\SubmitRequest::latest()->get()));
         // });

         view()->composer(['client.home','client.dashboard'],function($view){

            $view->with('countProjects',count(\App\Project::all()));
            $view->with('countImages',count(\App\Gallery::all()));
            $view->with('countFavorites',count(\App\Favorite::where('user_id',Auth::id())->get()));
            $view->with('result',json_decode(file_get_contents( "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDsCHWKh6jyNvXCJRFgDB2yio9lUCu9O0c" )));

         });

          view()->composer('client.userProfile',function($view){
            $view->with('countUserProjects',count(\App\SubmitRequest::where('user_id',Auth::id())->get()));
            $view->with('countUserPhotos',count(\App\Gallery::where('user_id',Auth::id())->get()));
         });

          view()->composer('client.searchUserProfile',function($view){
            $user = \User::where('slug',$slug)->first();
            $view->with('countUProjects',count(\App\SubmitRequest::where('user_id',$user->id)->get()));
            $view->with('countUPhotos',count(\App\Gallery::where('user_id',$user->id)->get()));
         });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    //     $this->app->bind('path.public', function () {
    //     return base_path() . DIRECTORY_SEPARATOR .'public';
    // });
    }
}
