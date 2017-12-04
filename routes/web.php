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



/**
 * Temp view routes to be replaced by controller(s)
 */




Route::middleware(['conversionTracking'])->group(function () {
    Route::get('/signup/compare','SignupController@compare');
    Route::get('/signup/start/{package}','SignupController@start');
    Route::post('/signup/setup','SignupController@setup');
    Route::post('/signup/warp','SignupController@warp');
    Route::post('/signup/create','SignupController@create');
});


Route::get('/members/onboarding','MembersController@onboarding');


Route::get('/', 'IndexController@index');


Route::get('/admin/pd', 'Admin\SaassyCloudAdminController@buildRecords');


/**
 * Default laravel routes, to be replaced
 */
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/', function () {
    return view('home');
});*/