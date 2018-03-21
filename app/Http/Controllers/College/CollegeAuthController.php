<?php

namespace App\Http\Controllers\College;
use App\Http\Controllers\Controller;
use App\Modle\College\College_details;

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
