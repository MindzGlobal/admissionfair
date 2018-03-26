<?php

namespace App\Http\Controllers\College;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CollegeAuthController extends Controller
{

    public function login(Request $Request){
      return view('college.login');
    }

    public function Register()
    {
      return view('college.register');
    }

    public function insertProfile(Request $Request)
    {
      dd($request);
      //return view('college.create_profile');
    }
}
