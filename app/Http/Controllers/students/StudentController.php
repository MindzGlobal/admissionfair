<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $value = $request->session()->get('key');
      //  return view('home')->with(['data'=>$value]);
    //  return view('student.auth.login');
    return view('student.pages.student_dashboard');
    }

    public function about()
    {
        return view('about');
    }
}
