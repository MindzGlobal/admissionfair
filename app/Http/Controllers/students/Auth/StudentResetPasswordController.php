<?php

namespace App\Http\Controllers\students\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Model\students\Student;
use Auth;
use Illuminate\Support\Facades\Hash;

class StudentResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('auth:student');
    }

    public function reset(Request $request)
    {
        $student=Student::where(['student_id'=>Auth::user()->student_id,])->first();
        if(!is_null($student)){
            if(Hash::check($request->currentPassword, $student->password)){

              if(Student::where(['student_id'=>Auth::user()->student_id,])->update(['password'=>$request->newpassword])>0){

                return redirect('student/profile')->with('success','Password has Updated Successfully!.');
              }
              return redirect()->back()->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);
            }
            return redirect()->back()->withErrors(['c_password'=>'Please Enter the Correct password']);
        }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);
    }


      /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('student.auth.passwords.reset');
            //->with( ['token' => $token, 'email' => $request->email]);
    }

        /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('student');
    }
}
