<?php
Auth::routes();

Route::get('/', 'ClientController@signIn');
Route::get('/', 'ClientController@dashboard');
Route::get('/projects', 'ClientController@widgets');
Route::get('/projects/{title}', 'ClientController@showWidget');
Route::get('photos', 'ClientController@gallery');
Route::post('/w/{id}', 'ClientController@download');
Route::post('/i/{id}', 'ClientController@downloadImg');
Route::get('/addToFavorties/{id}', 'ClientController@addToFavorites');
Route::get('/removeFavorties/{id}', 'ClientController@removeFavorites');
Route::get('photos/{gallery_image}', 'ClientController@showImage');
Route::get('/category/{tag}', 'ClientController@category');
Route::get('/newest', 'ClientController@newestImages');
Route::get('/oldest', 'ClientController@oldestImages');
Route::get('/mostPopular', 'ClientController@mostPopular');
Route::get('/trending', 'ClientController@trending');
Route::get('/googlefonts', 'ClientController@googleFonts');
Route::get('/favorites', 'ClientController@favorites');
Route::get('clientSearch', 'ClientController@clientSearch');
Route::get('mostDownloadedProjects', 'ClientController@mostDownloadedProjects');
Route::get('mostViewedProjects', 'ClientController@mostViewedProjects');
Route::post('emailNotifications/{id}', 'ClientController@emailNotifications');
Route::get('/projects/category/{category}', 'ClientController@projectCategory');
Route::post('clientLogout', 'ClientController@logout');
Route::get('notLoggedIn', array('as' => 'notLoggedIn', 'uses' => 'ClientController@notLoggedIn'));
Route::get('/privacyPolicy', 'ClientController@privacyPolicy');
Route::get('/termsAndConditions', 'ClientController@termsAndConditions');
Route::get('/cookiePolicy', 'ClientController@cookiePolicy');
Route::get('/license', 'ClientController@license');
Route::get('/{slug}/projects', 'ClientController@userProfile');
Route::get('/{slug}/photos', 'ClientController@userProfilePhotos');
Route::get('/{slug}/u/photos', 'ClientController@searchUserProfile');
Route::get('/{slug}/u/projects', 'ClientController@searchUserProjects');
Route::get('/{guidelines', 'ClientController@guidelines');
// Route::get('/{slug}/editProfile', 'ClientController@editProfile');
// Route::post('/updateProfile/{slug}', 'ClientController@updateProfile');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

// Route::middleware('optimizeImages')->group(function () {
	Route::post('addToGallery', 'GalleryController@store');
	Route::post('/admin/projects/store', 'ProjectsController@store');
	Route::put('/admin/projects/{id}', 'ProjectsController@update');
	Route::put('/admin/projectUploads/{id}', 'ProjectsController@updateUploads');
	Route::post('images', 'SettingsController@upload');
	Route::post('/admin/administrators/{id}', 'HomeController@update');
	Route::post('/admin/administratorsPic/{id}', 'HomeController@updatePic');
	Route::post('/admin/administratorsPassword/{id}', 'HomeController@updatePassword');
// });

Route::get('admin/proj', 'ProjectsController@projects');
Route::get('/admin/projects/create', 'ProjectsController@create');
Route::get('/admin/projects/{id}/edit', 'ProjectsController@edit');
Route::get('/admin/projects/{id}/editUploads', 'ProjectsController@editUploads');
Route::delete('/admin/projects/{id}', 'ProjectsController@destroy');
Route::delete('/admin/deleted_projects/{id}', 'ProjectsController@permanently_delete_project');
Route::post('/admin/deleted_projects/{id}', 'ProjectsController@restore_deleted_project');
// Route::get('/projects/{id}', 'ProjectsController@show');
Route::get('search', 'ProjectsController@search');

Route::get('/admin/settings', 'SettingsController@index');
Route::post('admin/settings/{id}', 'SettingsController@change_color');
Route::post('admin/settings/{pid}/update', 'SettingsController@setAppPaginations');
Route::post('createRole', 'SettingsController@createRole');
// Route::post('createUserRole', 'SettingsController@create_user_role');
Route::post('createPermission', 'SettingsController@create_permission');
Route::post('givePermissionToAuthorizedUser', 'SettingsController@givePermissionToAuthorizedUser');
// Route::post('givePermissionToUser', 'SettingsController@givePermissionToUser');
Route::post('/admin/settings/admin/{id}', 'SettingsController@revokePermissionToAdmin');
Route::delete('/admin/settings/user/{id}', 'SettingsController@revokePermissionToUser');
Route::delete('/admin/settings/deletePermissions/{id}', 'SettingsController@deletePermissions');

Route::get('/admin', 'HomeController@index');
Route::get('/admin/dashboard', 'HomeController@index');
Route::get('/admin/administrators', 'HomeController@show');
Route::get('/admin/administrators/{id}/edit_admin', 'HomeController@edit');
Route::get('/admin/administratorsPic/{id}/edit_admin_pic', 'HomeController@editPic');
Route::get('/admin/administratorsPassword/{id}/edit_admin_password', 'HomeController@editPassword');
Route::delete('/admin/administrators/{id}', 'HomeController@destroy');
Route::delete('delete_all', 'HomeController@delete_all');
Route::delete('empty_gallery', 'HomeController@empty_gallery');
Route::delete('/admin/deleted_admins/{id}', 'HomeController@permanently_delete_admin');
Route::post('/admin/deleted_admins/{id}', 'HomeController@restore_deleted_admin');
Route::get('/admin/trash', 'HomeController@trash');
Route::get('/admin/empty_trash', 'HomeController@empty_trash');
Route::get('/adminer', 'HomeController@adminer');
Route::get('/admin/subscribers', 'SubscribersController@show');
Route::post('/admin/subscribers/{id}', 'SubscribersController@destroy');

// Route::get('admin/gallery', 'GalleryController@index');
Route::get('admin/gallery', 'HomeController@galleryIndex');
Route::get('admin/gallery/add', 'TagController@show');
Route::get('/addPhotos', 'GalleryController@create');
Route::delete('photos/{id}', 'GalleryController@destroy');
Route::delete('/admin/gallery/{id}', 'HomeController@adminDestroy');
Route::delete('admin/trash/{id}', 'HomeController@permanently_delete_image');
Route::post('admin/trash/{id}', 'HomeController@restore_deleted_image');

Route::post('addTag', 'TagController@store');
Route::get('admin/gallery/{id}/edit_tag', 'TagController@edit');
Route::post('admin/gallery/edit_tag/{id}', "TagController@update");
Route::delete('admin/gallery/add/{id}', 'TagController@destroy');

Route::get('admin/category/{id}/edit_category', 'CategoryController@edit');
Route::post('admin/category/edit_category/{id}', 'CategoryController@update');
Route::post('addCategory', 'CategoryController@store');
Route::delete('admin/category/create/{id}', 'CategoryController@destroy');

Route::get('cache_routes', 'DevArtisanClearCacheController@cache_routes');
Route::get('cache_config', 'DevArtisanClearCacheController@cache_config');
Route::get('clear_views', 'DevArtisanClearCacheController@clear_views');
Route::get('clear_routes', 'DevArtisanClearCacheController@clear_routes');
Route::get('clear_config', 'DevArtisanClearCacheController@clear_config');
Route::get('clear_cache', 'DevArtisanClearCacheController@clear_cache');

Route::get('submit_project', 'SubmitRequestController@index');
Route::post('create_request', 'SubmitRequestController@store');
// Route::get('submits', 'SubmitRequestController@show');

Route::get('admin/submitted_projects','ProjectsController@pending_projects');
Route::get('approve_project/{id}','ProjectsController@approve_project');
Route::get('reject_project/{id}','ProjectsController@reject_project');

Route::get('/admin/decompose','\Lubusin\Decomposer\Controllers\DecomposerController@index');

// Route::get('/store', 'ProjectsController@shop');
// Route::get('/projects', 'ProjectsController@index');
// Route::delete('delete_all', 'ProjectsController@delete_all');
// Route::get('/admin/deleted_projects', 'ProjectsController@deleted_projects');

// Route::post('newsletter', 'NewsletterController@store');
// Route::post('campaign', 'NewsletterController@create_campaign');

// Route::get('/admin/settings/{id}/edit', 'SettingsController@edit');
// Route::post('/admin/settings/{id}', 'SettingsController@update');
// Route::get('/admin/settings/skills', 'SettingsController@create_skill');
// Route::post('/admin/settings/skills/store_skill', 'SettingsController@check_store_method');
// Route::delete('/admin/settings/skills/{id}', 'SettingsController@destroy');
// Route::get('/admin/settings/skills/{id}/edit_skills', 'SettingsController@edit_skill');
// Route::post('/admin/settings/skills/{id}', 'SettingsController@update_skill');
