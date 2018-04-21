<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Mail;
use App\Mail\CollegeVerifyEmail;
use App\Model\UserVerification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class RegisterController extends Controller
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
    protected $redirectTo = '/college/otpverification';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|min:10|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function sendVerificationEmail($data,$email_token)
    {
            Mail::to($data['email'])->send(new CollegeVerifyEmail($data,$email_token));
    }

    protected function create(array $data)
    {
        $reg_id = 'CLG'. substr(md5(rand()),0,4);
        $reg_id = strtoupper($reg_id);

        $number = $data['mobile'];
        $name = $data['name'];
        $email = $data['email'];
        // OTP sms ################################################
        $OTP = mt_rand(100000,(int)999999);
        $message = "Dear $OTP 

        MoneyMindz wishes you Happy B'Day
        
        Click here to become Smart Investor/Earner 08049202111";

        $UserVerification = new UserVerification;
        $UserVerification->unique_id = $number;
        $UserVerification->mobile_token = $OTP;

        //Vrification Mail ##########################################
        $email_token = Str::random(40);

        $UserVerification->email_token= $email_token;
        if($UserVerification->save()){
            $this->sendSMS($number, $message);
            $this->sendVerificationEmail($data,$email_token);
        }

        //Registration Record #######################################
       
        return User::create([
            'reg_id' => $reg_id,
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'role' => 'Admin',
            'mobile_verification' => 'Yes',
            'password' => Hash::make($data['password']),
        ]);
    }
}
