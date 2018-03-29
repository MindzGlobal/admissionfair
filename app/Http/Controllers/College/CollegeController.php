<?php

namespace App\Http\Controllers\College;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CollegeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $mobileVerificationStatus = Auth::user()->mobile_verification;
            if($mobileVerificationStatus == 'No'){
                return redirect()->route('otpverification');
            }
            return $next($request);
        });
    }

    protected function dashboard()
    {
        return view('college/dashboard');
    }

    protected function createprofile()
    {
        return view('college.create_profile');
    }

    protected function insertprofile(Request $request)
    {
        dd($request->all());
    }

}
