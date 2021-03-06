<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is user '.$id.' name: '.$name;
    
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');



// Route::auth();
// Route::get('/dashboard', 'DashboardController@index');
Route::resource('dashboard','AdminDashboardController');
Route::resource('login','LoginController');
Route::resource('register','RegisterController');
Route::resource('logout','LogoutController@store');
Route::resource('admin','AdministratorController');
Route::resource('admin-removed','AdministratorRemovedController');
Route::resource('admin-custom','AdministratorCustomController');
Route::resource('admin-proptype','PropertyTypeController');
Route::resource('admin-proptype-removed','PropertyTypeRemovedController');
Route::resource('admin-cproptype','PropertyTypeCustomController');
Route::resource('admin-cpaymentscheme','PaymentSchemeCustomController');
Route::resource('admin-paymentscheme','PaymentSchemeController');
Route::resource('admin-paymentscheme-removed','PaymentSchemeRemovedController');
Route::resource('admin-property','PropertyController');
Route::resource('admin-property-removed','PropertyRemovedController');
Route::resource('admin-cproperty','PropertyCustomController');
Route::resource('admin-client','ClientController');
Route::resource('admin-client-removed','ClientRemovedController');
Route::resource('admin-cclient','ClientCustomController');
