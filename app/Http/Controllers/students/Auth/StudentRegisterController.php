<?php

namespace App\Http\Controllers\students\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Model\students\Student;
//use Auth;
use Session;

class StudentRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'student/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function signupform()
    {
    	return view('student.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|min:10',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createStudent(Request $request)
    {
        //dd($request);
        $reg_id = 'STD'. substr(md5(rand()),0,4);
        $reg_id = strtoupper($reg_id);

        return Student::create([
            'student_id' => $reg_id,
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'role' => 'Student',
            'password' => bcrypt($request['password']),
        ]);
    }

    // public function createJobseeker(Request $request)
    // {
    // 	Session::flash('status','Check your email to verify your accouunt.');
    // 	// return view('jobseeker.auth.register');

    //     $this->validate($request,[
    //         'first_name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
    //         'last_name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
    //         'mobile_number' => 'required|numeric|digits:10|unique:jobseekers',
    //         'email' => 'required|string|email|max:255|unique:jobseekers',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);

    // 	$jobseeker = new Jobseeker;
    // 	$jobseeker->first_name = strtolower($request->get('first_name'));
    //     $jobseeker->last_name = strtolower($request->get('last_name'));
    // 	$jobseeker->display_name = $jobseeker->first_name.' '.$jobseeker->last_name;
    //     $jobseeker->jobseekers_unique_id = self::random();
    // 	$jobseeker->mobile_number = $request->get('mobile_number');
    // 	$jobseeker->email = strtolower($request->get('email'));
    // 	$jobseeker->password = bcrypt($request->get('password'));
    // 	$jobseeker->remember_token = $request->get('_token');
    //     $jobseeker->email_token = Str::random(40);
    // 	$jobseeker->save();
        
    //     // $welcomeMessage = 'Thank you for registration.Job Mindz presents you more than 891206 new jobs and 3Lakh skillfull candidates.Follow the link to grap opportunity https://goo.gl/yE6Nrd';
    //         // $result = \LaravelMsg91::message(array('918095109438', '919986661289', '919980780992'), $message);
    //     //$result = \LaravelMsg91::message($jobseeker->mobile_number, $welcomeMessage);
    // 	// return redirect('/jobseeker/login')->with('status', 'Successfully sent the verification link to your email id');;
    // 	// dd($jobseeker);

    //     $thisJobseeker = Jobseeker::findOrfail($jobseeker->id);

    //     $this->sendJobseekerVerificationEmail($thisJobseeker);

    //     return redirect('/jobseeker/login')->with('status','Check your email to verify your accouunt.');

    // }
}
