<?php

namespace App\Http\Controllers;
use App\Model\UserVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class OtpController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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

    protected function sendOTP(Request $request)
    {
        $res = 'Success';
        $msg = "OTP Generated Successfully.";

        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|min:10|unique:users',
        ]);
        
        if($validation->passes()) 
        {
            $number = $request->mobile;
            $name = $request->namel;
            $OTP = '123456';
            $message = "Dear $OTP 

            MoneyMindz wishes you Happy B'Day
            
            Click here to become Smart Investor/Earner 08049202111";

            $this->sendSMS($number, $message);
            $UserVerification = new UserVerification;
            $UserVerification->unique_id = $number;
            $UserVerification->mobile_token = $OTP;
            if(!$UserVerification->save())
            {
                $res = 'Error';
                $msg = "OTP Sending Failed!";
            }
        }
        if($validation->errors())
        {
            $res =  $validation->errors();
        }
        return $this->Result($res,$msg);
    }
}
