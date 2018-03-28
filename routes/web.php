<?php

/*
|---   -----------------------------------------------------------------------
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
Route::get('college/create-profile','College\CollegeAuthController@creatProfile');
Route::get('college/reg','College\CollegeAuthController@register');

Route::get('student/demo', function () {
    return view('student.pages.register_login');
});

//Student Section ###############################################################################
Route::get('college/demo', function () {
    return view('college.create_profile');
});

//  Route::get('student/demo', function () {
//      return view('student.pages.edit_student_details');
// });

Route::get('student/demo',"students\StudentController@index");
Route::post("student/insertprofile","students\StudentController@insert_student");
Route::get('student/student_dashboard','students\StudentController@fetch_student');
Route::get("student/edit_student","students\StudentController@edit_student");
Route::post("student/update_student","students\StudentController@update_student");
Route::post('student/upload_image','students\StudentController@uploadprofile_image');
Route::get('student/delete','students\StudentController@deleteprofile_image');
