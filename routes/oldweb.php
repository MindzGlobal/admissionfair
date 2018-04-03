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
Route::get('college/otpverification', 'college\OtpController@OtpVerifivationView')->name('otpverification');
Route::post('college/otpverify', 'college\OtpController@OtpVerify')->name('otpverify');
Route::post('college/resendotp', 'college\OtpController@resendotp')->name('clgresendotp');

//College Section  ##############################################################################
Route::get('college/login','College\CollegeAuthController@login')->name('collegelogin');
Route::get('college/register','College\CollegeAuthController@register');
Route::get('college/create-profile','College\CollegeAuthController@creatProfile');
Route::get('college/reg','College\CollegeAuthController@register');

Route::get('student/demo', function () {
    return view('student.pages.register_login');
});
Route::post('college/insertprofile','College\CollegeController@insertProfile');
Route::get('college/dashboard','College\CollegeController@dashboard')->name('index');

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
Route::prefix('student')->namespace('students')->group(function(){
    Route::Post('logout','Auth\StudentLoginController@logout')->name('student.logout');

    Route::get('profile','StudentController@index');

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



