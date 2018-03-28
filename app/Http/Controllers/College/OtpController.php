<?php

namespace App\Http\Controllers\college;
use App\Http\Controllers\Controller;
use App\Model\UserVerification;
use App\User;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function OtpVerifivationView()
    {
        return view('college\otp-verification');
    }

    protected function OtpVerify(Request $request)
    {
        $authNumber = Auth::user()->mobile;

        $otpData = UserVerification::select('mobile_token')->where('unique_id',$authNumber)
                    ->orderBy('created_at', 'desc')
                    ->first();
        $currectOtp = $otpData->mobile_token;            
        $enterdeOtp = $request->otp;
        if($currectOtp == $enterdeOtp)
        {
            User::where('mobile',$authNumber)->update(['email_verification' => 'Yes']);
            return redirect()->route('index')->with(['msg' => 'Enter Correct OTP!']);
        }
        else
        {
            return redirect()->route('otpverification')->with(['msg' => 'Enter Correct OTP!']);
        }
        

    }


    protected function resendotp(Request $request)
    {
        $res = 'success';
        $msg = "OTP Generated Successfully.";
        $authNumber = Auth::user()->mobile;
      
            $OTP = mt_rand(100000,(int)999999);
            $message = "Dear $OTP 

            MoneyMindz wishes you Happy B'Day
            
            Click here to become Smart Investor/Earner 08049202111";

            $this->sendSMS($authNumber, $message);
            $UserVerification = new UserVerification;
            $UserVerification->unique_id = $authNumber;
            $UserVerification->mobile_token = $OTP;
            if(!$UserVerification->save())
            {
                $res = 'error';
                $msg = "OTP Sending Failed!";
            }
      
        return $this->Result($res,$msg);
    }
}