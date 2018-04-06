<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;


class CollegeAuthController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }

  public function login(Request $Request){
    return view('college.login');
  }

  public function Register()
  {
    return view('college.register');
  }

  public function select_booth()
  {
    return view('college.select_booth');
  }
}
