<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');




Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store');

Route::get('/about-us', 'AboutController@about')->name('aboutUs');




//======================Ben's Routes=================================
Route::get('owner/index', 'OwnerController@ownerIndex')->name('owner-index');

Route::get('owner/gallary/houses', 'OwnerController@ownerGallaryHouses')->name('owner-houses');

Route::get('owner/gallary/lands', 'OwnerController@ownerGallaryLands')->name('owner-lands');
















































//==============================Derricks Route==============================
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@doLogout');

Route::get('/user/personnel', 'UserController@personnelForm')->name('personnel');
Route::post('/user/personnel', 'UserController@AddPersonnel');
Route::get('/user/personnel/show','UserController@showIndex')->name('showpersonnel');
Route::get('/personnel/{id}/edit','UserController@editPersonnel')->name('editpersonnel');

Route::post('/personnel/{id}/update', 'UserController@updatePersonnel')->name('updatepersonnel');

Route::get('/delete/{id}', 'UserController@deletePersonnel')->name('deletepersonnel');











































































//============================Isaac's Routes===============================

// Admin index route
Route::get('/admin/index', 'AdminController@adminIndex')->name('AdminIndex');

// Route to view all properties by admin
Route::get('/admin/properties', 'AdminController@viewProperties')->name('allProperties');

// Deleteing a particular property
Route::delete('/deleteproperties/{id}', 'AdminController@deleteProperty')->name('deleteProperty');









































































//=================================Arnold's Routes=================================
Route::resource('/property-type', 'PropertyTypeController');
Route::resource('/amenity', 'AmenityController');











































































//=======================Samuel's Routes==============================================
Route::get('user/register', 'UserController@register')->name('register-user');
Route::post('user/register', 'UserController@store')->name('save-user');

Route::get('user/verification', 'UserController@showVerificationForm')->name('verify-user');
Route::post('user/verification', 'UserController@verification')->name('verify');


Route::group(['middleware' => ['auth']], function () {
    //

    Route::get('property/add', 'PropertyController@addProperty')->name('add-property');
    Route::post('property/add', 'PropertyController@storeProperty')->name('save-property');
    Route::get('property/index', 'PropertyController@index')->name('properties');
    Route::get('property/{show}', 'PropertyController@show')->name('property.show');
});
