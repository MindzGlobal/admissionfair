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
<<<<<<< HEAD
=======
Route::get('college/reg','College\CollegeAuthController@register');












>>>>>>> 41af0a053a6c787a2b1b7634fbd0bea7db37b878

Route::get('college/demo', function () {
    return view('college.create_profile');
});
