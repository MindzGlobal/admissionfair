<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function result($res,$msg)
    {
        $res = ['res' => $res,'msg' => $msg];
        return json_encode($res);
    }

    public function CollegeSetting(){
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $mobileVerificationStatus = Auth::user()->mobile_verification;
            if($mobileVerificationStatus == 'No'){
                return redirect()->route('otpverification');
            }
            else if(Auth::user()->role == 'User')
            {
              return redirect('college/chat');
            } 
            else if(Auth::user()->compilation_status!='Done') {
              if(!in_array(Route::currentRouteName(), array('createprofile','insertprofile','select_booth','insertBooth','package','pay'))){
                return redirect()->route('createprofile');
              }
            }
            return $next($request);
        });
    }

    public function random()
    {
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@&%!";
        $clen   = strlen( $chars )-1;
        $id  = '';
        $length = 10;
        for ($i = 0; $i < $length; $i++) {
            $id .= $chars[mt_rand(0,$clen)];
        }
        return ($id);
    }

    public function sendSMS($number, $message)
    {
        $param = array();
        $request =""; //initialise the request variable
        $param['method']= "sendMessage";
        $param['send_to'] = $number;
        $param['msg'] = $message;

        $param['userid'] = "2000151053";
        $param['password'] = 'Haseeb@119@zrmindz';
        $param['v'] = "1.1";
        $param['msg_type'] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
        $param['auth_scheme'] = "PLAIN";
        //Have to URL encode the values
        foreach($param as $key=>$val) {
        $request.= $key."=".urlencode($val);
        //we have to urlencode the values
        $request.= "&";
        //append the ampersand (&) sign after each parameter/value pair
        }
        $request = substr($request, 0, strlen($request)-1);
        //remove final (&) sign from the request
        $url = "https://enterprise.smsgupshup.com/GatewayAPI/rest?".$request;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_scraped_page = curl_exec($ch);
        curl_close($ch);
    }

    public function YoutubeID($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }
}
