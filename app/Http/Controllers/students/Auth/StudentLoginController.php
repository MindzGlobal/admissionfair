<?php

namespace App\Http\Controllers\students\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Model\students\Student;
use App\Model\students\StudentEducationDetails;
class StudentLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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

    public function showLoginForm()
    {
        return view('student.auth.login');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        // dd($this->guard('student')->attempt($this->credentials($request), $request->filled('remember')));//'email_verification'=>'verified'
         $validStudent = Auth::guard('student')->attempt(['email'=>$request->email , 'password'=>$request->password]); 
     
         return $validStudent;
    }

     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        
        $student=Student::where(['email'=>$request->email])->first();
        if($student->otp_verified<=0){
            Session::flush();
            
            return redirect('student/otp')->with('mobile',$student->mobile)
            ->with('warning','Your Account is not Verified yet,Please verify your account through OTP.');

        }
        $request->session()->regenerate();

            $this->clearLoginAttempts($request);

            return $this->authenticated($request, $this->guard()->user())
                    ?: redirect()->intended($this->redirectPath());
        
    }
     
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $student)
    {
        if($student->otp_verified>0){
          return redirect()->intended('/student/profile')
           ->with('success','successfully Login to Virtual AdmissionFair');
         }
         return redirect('student/otp')->with('mobile',$student->mobile)
            ->with('warning','Your Account is not Verified yet,Please verify your account through OTP.');

    }


      /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard()
    {
        return Auth::guard('student');
    }

       /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        Session::flush();

        $request->session()->invalidate();

        return redirect('/student/login');
    }
}
