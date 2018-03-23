<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CollegeAuthController extends Controller
{
    public function routes()
    {
        $this->middleware('auth');
    }
    
    public function login(Request $Request){
      return view('college.login');
    }

    public function Register()
    {
      return view('college.register');
    }

    public function insertProfile(Request $request)
    {
      $res = 'Success';
      $msg = "Done";
      $clgDetais = new CollegeDetail;
      $clgDetais->college_name = $request->clg_name;
      $clgDetais->college_email = $request->clg_offemail;
      $clgDetais->college_number_1 = $request->clg_official_number1;
      $clgDetais->college_number_2 = $request->clg_official_number2;
      $clgDetais->college_state = $request->clg_state;
      $clgDetais->college_city = $request->clg_city;
      $clgDetais->college_pincode = $request->clg_pincode;
      $clgDetais->college_address = $request->get('clg_address');
      $clgDetais->website = $request->clg_url;

      if(!$clgDetais->save())
      {
        $res = 'Error';
        $msg = "Some Error Occurred!";
      }
      return $this->Result($res,$msg);
    }
}
