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
    return view('college.subscribe_price');
});
Route::post('pay','PaymentController@collegePay')->name('pay');
Route::get('paystatus','PaymentController@status')->name('paystatus');

Route::post('pay-student','PaymentController@studentPay')->name('studentPay');
Route::get('paystatus-student','PaymentController@studentStatus')->name('studentpaystatus');
//College Section  ##############################################################################
Route::prefix('college')->namespace('college')->group(function(){
    Route::get('register','CollegeAuthController@register');
    Route::get('login','CollegeAuthController@login')->name('collegelogin');

    Route::get('otpverification','OtpController@OtpVerifivationView')->name('otpverification');
    Route::post('otpverify', 'OtpController@OtpVerify')->name('otpverify');
    Route::post('resendotp', 'OtpController@resendotp')->name('clgresendotp');
    
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    Route::post('index','MediaController@uploadprofile_image');
    Route::get('myprofile','MediaController@showprofile_image')->name('myprofile');

    Route::post('image_gallery','MediaController@uploadimage');
    Route::get('image_gallery','MediaController@showimages');
    Route::get('deleteimagegallery/{id}','MediaController@deleteImage');

    Route::post('video_gallery','videoController@uploadvideo');
    Route::get('video_gallery','videoController@showvideo');
    Route::get('deletevideogallery/{id}','videoController@deleteVideo');

    Route::get('createprofile','CollegeController@createprofile')->name('createprofile');
    Route::post('insertprofile','CollegeController@insertprofile')->name('insertprofile');

    Route::get('select_booth','CollegeController@select_booth');
    Route::post('insertBooth','CollegeController@insertBooth');

    Route::get('package','CollegeController@packegeview');

    Route::post('insertBooth','CollegeController@insertBooth');
    Route::get('select_booth','CollegeController@select_booth');

    Route::get('std_profile/{student_id}','Collegecontroller@std_profile');

    Route::get('update_profile','CollegeController@updateformprofile');
    Route::post('updatecollegedetails','CollegeController@updatecollegedetails');
    Route::post('updatecollegecourse','CollegeController@updatecollegecourse');
    Route::post('updatecollegemedia','CollegeController@updatecollegemedia');

    Route::get('searchcourseajax',array('as'=>'searchcourseajax','uses'=>'AutoCompleteController@autoCourseComplete'));
    Route::get('searchdeparmentajax',array('as'=>'searchdeparmentajax','uses'=>'AutoCompleteController@autoDepartmentComplete'));

    Route::post('resetlogindetails','ResetPasswordController@resetlogindetails');
    Route::get('resetpwd','ResetPasswordController@resetpwd');
    Route::post('changepwd','ResetPasswordController@changepwd');


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
    Route::get('resetpassword','Auth\StudentResetPasswordController@showResetForm')->name('student.password.reset');
 //   Route::get('password/reset/{token}','Auth\StudentResetPasswordController@showResetForm')->name('student.password.reset');
    Route::get('verify/{email}/{email_token}','Auth\StudentResetPasswordController@authenticateJobseekerEmail')->name('authenticateJobseekerEmail');

});
Route::prefix('student')->namespace('students')->middleware('revalidateStudent')->group(function(){

    Route::get('addprofile','StudentController@addEducationdetails');
    Route::get('profile','StudentController@Showprofile');
    Route::post("updateprofile","StudentController@addOrupdateStudentDetails");
    Route::get("editprofile","StudentController@showEditForm");
    Route::post('upload_image','StudentController@uploadprofileImage');
    Route::get('delete_image','StudentController@deleteprofileImage');

    Route::get('booth','CollegeDetailsController@showBooth');
    Route::get('singlebooth/{reg_id}','CollegeDetailsController@showSinglebooth');
    Route::get('{reg_id}/{dept_id}','CollegeDetailsController@coursedepartments');
    Route::get('course','CollegeDetailsController@showSelectedDepartment');
    Route::post('apply','CollegeDetailsController@ApplyCollege');

    Route::get('gallery','CollegeDetailsController@collegeGallery');

});

Route::get('college/std_profile1', function () {
    return view('college.std_profile1');
});

