<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
use App\Model\students\Student;
use App\Model\students\Student_Graduation__Details;
use App\Model\students\Student_Education_Details;
use App\Model\StudentAppliedHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;
use App\Model\UserVerification;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // reset Password View ###########################################################################
    public function resetpwd()
    { 
      return view('college.resetpwd');
    }

    // reset Password Method ###########################################################################
    public function changepwd(Request $request)
    {
     
      $validatedData = $request->validate([
          'old_pwd' => 'required',
          'password' => 'required|string|min:8|confirmed|different:old_pwd',
      ]);
      $id = Auth::user()->reg_id;
      $users = CollegeDetail::where('reg_id', $id)->first();
      $msg = Hash::make(Input::get('old_pwd'));
      if (Hash::check(Input::get('old_pwd'), $users->password))
      {
        $users->password = Hash::make(Input::get('password'));
        $users->save();
        $msg = 'Password changed Successfully';
        return redirect("college/resetpwd")->with(['status'=>'success','msg'=> $msg]);
      }
      else {
        $msg = 'Current password is incorrect';
        return redirect("college/resetpwd")->with(['status'=>'error','msg'=> $msg]);
      }
    }


     public function resetlogindetails(Request $request){

      $id = Auth::user()->id;
      $old_mob = Auth::user()->mobile;
      $number = $request->Input('mobile');
      $user = CollegeDetail::find($id);
      $user->name = $request->Input('name');
      $user->email = $request->Input('email');
     
       $this->validate($request, [
            
            'mobile' => 'required|numeric|min:10|unique:users',
            
        ]);

      if($old_mob != $request->Input('mobile'))
      {
        // OTP sms ################################################
        $OTP = mt_rand(100000,(int)999999);
        $message = "Dear $OTP

        MoneyMindz wishes you Happy B'Day

        Click here to become Smart Investor/Earner 08049202111";

        $UserVerification = new UserVerification;
        $UserVerification->unique_id = $number;
        $UserVerification->mobile_token = $OTP;

        if($UserVerification->save()){
            $this->sendSMS($number, $message);
        }

        $user->mobile = $request->Input('mobile');
        $user->mobile_verification = 'No';
      }

      $user->save();

      return redirect("college/otpverification");   
    }
    
}
