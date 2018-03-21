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

// Auth Section ##############################################################################
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@about')->name('home');

//College Section  ##############################################################################
Route::get('college/login','College\CollegeAuthController@login');
Route::get('college/register','College\CollegeAuthController@register');
Route::get('college/reg','College\CollegeAuthController@register');
Route::get('college/index', function () {
    return view('college.create_profile');
});
Route::get('college/select_booth', function () {
    return view('college.select_booth');
});
Route::get('college/std_profile', function () {
    return view('college.std_profile');
});
Route::get('college/subscribe_price', function () {
    return view('college.subscribe_price');
});
Route::get('college/image_gallery', function () {
    return view('college.image_gallery');
});
