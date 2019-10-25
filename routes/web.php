<?php

Auth::routes(['register' => false]);

Route::get('/', function(){
	return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::name('admin.')->prefix('admin')->group(function () {
	Route::resource('jobs', 'JobsController');
	Route::resource('job-replies', 'JobRepliesController');
	Route::resource('contacts', 'ContactsController');
	Route::resource('feedbacks', 'FeedbacksController');
	Route::resource('vendors', 'VendorsController');
	Route::get('settings/site_variables', 'HomeController@site_variables')->name('settings.site_variables');
});

// For pages
Route::view('/about', 'pages.about');
Route::view('/clients', 'pages.clients');
Route::view('/services', 'pages.services');
Route::view('/laxyo-group-companies', 'pages.laxyo_group_companies');
Route::view('/operation-and-maintenance', 'pages.operation_and_maintenance');
Route::view('/infrastructure', 'pages.infrastructure');
Route::view('/railway-contractors', 'pages.railway_contractors');
Route::view('/mining-services', 'pages.mining_services');
Route::view('/renewable-energy-system', 'pages.renewable_energy_system');
Route::view('/amphibious-excavator', 'pages.amphibious_excavator');
Route::view('/material-handling-contractor', 'pages.material-handling-contractor');
Route::view('/operation-and-maintenance-contractors', 'pages.operation_and_maintenance_contractors');
Route::view('/dredging-and-reclamation', 'pages.dredging_and_reclamation');
Route::view('/construction-equipment-rental-services', 'pages.construction_equipment_rental_services');
Route::view('/contact', 'pages.contact');
Route::view('/careers', 'pages.careers');


// Admin Panel

// Route::get('/admin-career', 'AdminController@index');
// Route::delete('/admin-career/{id}', 'AdminController@cdestroy')->name('cdel');
// Route::get('search_career', 'AdminController@search_career');
// Route::get('DeleteAllitems', 'AdminController@deleteAll');
// Route::get('DeleteAll_vender', 'AdminController@deleteAll_vender');
// Route::get('DeleteAll_contact', 'AdminController@DeleteAll_contact');
// Route::get('DeleteAll_feedback', 'AdminController@DeleteAll_feedback');
// Route::get('DeleteAll_post', 'AdminController@DeleteAll_post');
// Route::post('/feedback', 'CareerController@feedback');
// Route::get('/admin-feedback', 'AdminController@feedback');
// Route::delete('/admin/{id}', 'AdminController@fdestroy')->name('fdel');
// Route::get('/admin-contact', 'AdminController@contact');
// Route::delete('/admin-contact/{id}', 'AdminController@condestroy')->name('contactdel');
// Route::get('/admin-vender', 'AdminController@vender');
// Route::delete('/admin-vender/{id}', 'AdminController@vdestroy')->name('venderdel');
// Route::get('/admin-download-vendor-file', 'AdminController@download_vendor')->name('dwld_vendor');
// Route::get('/admin-download-career-file', 'AdminController@fileDownload')->name('download_career');
// Route::resource('/admin-post', 'PostController');
// Route::get('/admin-sitevars', 'AdminController@site_vars');
// Route::post('/admin_sitevars', 'AdminController@site_vars_edit');
// Route::get('/careershowadmin/{id}', 'AdminController@career_admin_show');

// YOLAX

// Route::get('/contact_yolax', 'AdminController@contact_yolax');
// Route::delete('/admin-contact-yolax/{id}', 'AdminController@con_yolax_del')->name('con_yolax_del');
// Route::get('DeleteAll_contact_yolax', 'AdminController@deleteAll_contact_yolax');
// Route::get('/career_yolax', 'AdminController@career_yolax');
// Route::delete('/admin-career-yolax/{id}', 'AdminController@car_yolax_del')->name('car_yolax_del');
// Route::get('DeleteAll_career_yolax', 'AdminController@deleteAll_career_yolax');
// Route::get('/sitevars_yolax', 'AdminController@sitevars_yolax');
// Route::get('/admin-download-career-yolax-file', 'AdminController@dwld_yolax_career')->name('dwld_yolax_career');
// Route::get('search_career_yolax', 'AdminController@search_career_yolax');
// Route::resource('/post_yolax', 'YolaxjobController');