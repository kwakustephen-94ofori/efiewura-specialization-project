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









































































//============================Isaac's Routes===============================

// Admin index route
Route::get('/admin/index', 'AdminController@adminIndex')->name('AdminIndex');

// Route to view all properties by admin
Route::get('/admin/properties', 'AdminController@viewProperties')->name('allProperties');









































































//=================================Arnold's Routes=================================












































































//=======================Samuel's Routes==============================================
Route::get('user/register', 'UserController@register')->name('register-user');
Route::post('user/register', 'UserController@store')->name('save-user');

Route::get('user/verification', 'UserController@showVerificationForm')->name('verify-user');
Route::post('user/verification', 'UserController@verification')->name('verify');
