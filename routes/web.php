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
Route::post('college/insertprofile','College\CollegeAuthController@insertProfile');

Route::get('college/demo', function () {
    return view('college.create_profile');
});
Route::get('college/std_profile1', function () {
    return view('college.std_profile1');
});
Route::get('college/video_gallery', function () {
    return view('college.video_gallery');
});
Route::get('college/image_gallery','College\MediaController@insertimages');
Route::post('college/image_gallery','College\MediaController@uploadimage');
Route::get('college/image_gallery','College\MediaController@showimages');
