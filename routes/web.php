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

Route::get('/', 'IndexController@index');
Route::get('/about', 'SimplePageController@about');
Route::get('/terms', 'SimplePageController@terms');
Route::get('/privacy', 'SimplePageController@privacy');

Route::middleware(['conversionTracking'])->group(function () {
    Route::get('/signup/compare','SignupController@compare');
    Route::get('/signup/start/{package}','SignupController@start')->name('start');
    Route::match(['get', 'post'], '/signup/setup','SignupController@setup');
    Route::match(['get', 'post'],'/signup/warp','SignupController@warp');
    Route::match(['get', 'post'],'/signup/create','SignupController@create');
});




// Route::get('/admin/pd', 'Admin\SaassyCloudAdminController@buildRecords');
Route::middleware(['auth'])->group(function(){
    Route::get('/members/home','MembersController@home');
    Route::get('/members/onboarding','MembersController@onboarding');
    Route::get('/profile/picture', 'StreamController@profilePic');
    Route::get('/admin/dashboard', 'Admin\AdminController@dashboard');
    Route::get('/admin/generateTraffic', 'Admin\AdminController@generateTraffic');

});
/**
 * Default laravel routes, to be replaced
 */
Auth::routes();
