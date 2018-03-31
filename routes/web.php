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
//Student Section ###############################################################################
Route::get('college/demo', function () {
    return view('college.create_profile');
});


//Student Section  ##############################################################################
Route::prefix('student')->namespace('students')->group(function(){
    Route::Post('logout','Auth\StudentLoginController@logout')->name('student.logout');

    
    Route::get('otp','StudentController@ShowOtpForm')->name('student.otpform');
    Route::post('otp','StudentController@verifyStudentOtp')->name('student.otpVerify');
    Route::get('resendotp','StudentController@resendStudentOtp')->name('student.resendotp');

    Route::get('login','Auth\StudentLoginController@showLoginForm')->name('student.loginform');
    Route::post('login','Auth\StudentLoginController@login')->name('student.login');
    Route::get('signup','Auth\StudentRegisterController@signupform')->name('student.registerform');
    Route::post('signup','Auth\StudentRegisterController@createStudent')->name('create-register');
    Route::get('verify/{studentId}/{email_token}','Auth\StudentRegisterController@authenticateStudentEmail')->name('authenticateStudentEmail');


    Route::post('password/email','Auth\StudentForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::get('password/reset','Auth\StudentForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::post('password/reset','Auth\ResetPasswordController@reset');
    Route::get('password/reset/{token}','Auth\StudentResetPasswordController@showResetForm')->name('student.password.reset');
    Route::get('verify/{email}/{email_token}','Auth\StudentResetPasswordController@authenticateJobseekerEmail')->name('authenticateJobseekerEmail');

    Route::get('profile','StudentController@Showprofile');
    Route::post("updateprofile","StudentController@addOrupdateStudentDetails");
    Route::get("editprofile","StudentController@showEditForm");
    Route::post('student/upload_image','StudentController@uploadprofileImage');
    Route::get('student/delete_image','StudentController@deleteprofileImage');

});
Route::get('college/std_profile1', function () {
    return view('college.std_profile1');
});

Route::get('college/image_gallery','College\MediaController@insertimages');
Route::post('college/image_gallery','College\MediaController@uploadimage');
Route::get('college/image_gallery','College\MediaController@showimages');

Route::post('college/index','College\MediaController@uploadprofile_image');
Route::get('college/myprofile','College\MediaController@showprofile_image');


Route::get('college/video_gallery','College\videoController@insertvideo');
Route::post('college/video_gallery','College\videoController@uploadvideo');
Route::get('college/video_gallery','College\videoController@showvideo');



