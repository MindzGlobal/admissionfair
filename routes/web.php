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
//Student Section ###############################################################################
Route::get('college/demo', function () {
    return view('college.create_profile');
});


//College Section  ##############################################################################
Route::prefix('college')->namespace('college')->group(function(){
    Route::get('register','CollegeAuthController@register');
    Route::get('login','CollegeAuthController@login')->name('collegelogin');
    Route::get('otpverification','OtpController@OtpVerifivationView')->name('otpverification');
    Route::post('otpverify', 'OtpController@OtpVerify')->name('otpverify');
    Route::post('resendotp', 'OtpController@resendotp')->name('clgresendotp');
    Route::get('dashboard','CollegeController@dashboard')->name('dashboard');
  
    Route::post('index','MediaController@uploadprofile_image');
    Route::get('myprofile','MediaController@showprofile_image');

    Route::post('image_gallery','MediaController@uploadimage');
    Route::get('image_gallery','MediaController@showimages');
    Route::get('deleteimagegallery/{id}','MediaController@deleteImage');

    Route::post('video_gallery','videoController@uploadvideo');
    Route::get('video_gallery','videoController@showvideo');
    Route::get('deletevideogallery/{id}','videoController@deleteVideo');

    Route::get('createprofile','CollegeController@createprofile')->name('createprofile');
    Route::post('insertprofile','CollegeController@insertprofile');

    Route::get('update_profile','CollegeController@updateformprofile');
    Route::post('updatecollegedetails','CollegeController@updatecollegedetails');
    Route::post('updatecollegecourse','CollegeController@updatecollegecourse');
    Route::post('updatecollegemedia','CollegeController@updatecollegemedia');

    Route::post('resetlogindetails','CollegeController@resetlogindetails');
    Route::get('resetpwd','CollegeController@resetpwd');

    // Route::get('validation','CollegeController@validation');
    Route::post('changepwd','CollegeController@changepwd');


});


//Student Section  ##############################################################################
Route::prefix('student')->namespace('students')->group(function(){
    Route::Post('logout','Auth\StudentLoginController@logout')->name('student.logout');

    Route::get('otp','OtpVerificationController@ShowOtpForm')->name('student.otpform');
    Route::post('otp','OtpVerificationController@verifyStudentOtp')->name('student.otpVerify');
    Route::get('resendotp','OtpVerificationController@resendStudentOtp')->name('student.resendotp');

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

});
Route::prefix('student')->namespace('students')->middleware('revalidateStudent')->group(function(){

    Route::get('addprofile','StudentController@addEducationdetails');
    Route::get('profile','StudentController@Showprofile');
    Route::post("updateprofile","StudentController@addOrupdateStudentDetails");
    Route::get("editprofile","StudentController@showEditForm");
    Route::post('upload_image','StudentController@uploadprofileImage');
    Route::get('delete_image','StudentController@deleteprofileImage');

});

Route::get('college/std_profile1', function () {
    return view('college.std_profile1');
});

Route::get('college/resetpwd', function () {
    return view('college.resetpwd');
});

