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
Route::get('college/otpverification', 'college\OtpController@OtpVerifivationView')->name('otpverification');
Route::post('college/otpverify', 'college\OtpController@OtpVerify')->name('otpverify');
Route::post('college/resendotp', 'college\OtpController@resendotp')->name('clgresendotp');

//College Section  ##############################################################################
Route::get('college/login','College\CollegeAuthController@login')->name('collegelogin');
Route::get('college/register','College\CollegeAuthController@register');
Route::post('college/insertprofile','College\CollegeAuthController@insertProfile');
Route::get('college/dashboard','College\CollegeController@dashboard')->name('index');

Route::get('college/demo', function () {
    return view('college.create_profile');
});

Route::prefix('student')->namespace('students')->group(function(){
    Route::get('logout','Auth\StudentLoginController@logout')->name('student.logout');

    Route::get('profile','StudentController@index');

    Route::get('login','Auth\StudentLoginController@showLoginForm')->name('student-login-form');
    Route::post('login','Auth\StudentLoginController@login')->name('student-login');
    Route::get('signup','Auth\StudentRegisterController@signupform');
    Route::post('signup','Auth\StudentRegisterController@createStudent')->name('create-register');
    
    
    Route::post('password/email','Auth\StudentForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::get('password/reset','Auth\StudentForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::post('password/reset','Auth\ResetPasswordController@reset');
    Route::get('password/reset/{token}','Auth\StudentResetPasswordController@showResetForm')->name('student.password.reset');
     Route::get('verify/{email}/{email_token}','Auth\StudentResetPasswordController@authenticateJobseekerEmail')->name('authenticateJobseekerEmail');
});
Route::get('college/std_profile1', function () {
    return view('college.std_profile1');
});
Route::get('college/video_gallery', function () {
    return view('college.video_gallery');
});
Route::get('college/image_gallery', function () {
    return view('college.image_gallery');
});
