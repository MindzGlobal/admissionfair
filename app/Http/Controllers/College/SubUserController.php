<?php

namespace App\Http\Controllers\College;
use Auth;
use App\User;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\CollegeVerifyEmail;
use App\Model\UserVerification;
use Illuminate\Support\Str;

class SubUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminId = Auth::user()->id;
        $representative = User::where(['adminId'=>$adminId,'role'=>'User'])->paginate(10);
       // dd($representative->all());
        return view('college.representative',['representative'=>$representative]);
    }

    public function sendVerificationEmail($data,$email_token)
    {
            Mail::to($data['email'])->send(new CollegeVerifyEmail($data,$email_token));
    }

    public function create(Request $request)
    {
        $adminId = Auth::user()->id;

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|min:10|unique:users',
        ]);
        

        $reg_id = 'CLG'. substr(md5(rand()),0,4);
        $reg_id = strtoupper($reg_id);

        $name = $request->name;
        $number = $request->mobile;
        $email = $request->email;
        $password = 'PASS'.mt_rand(100000,(int)999999);
        // OTP sms ################################################
        $OTP = mt_rand(100000,(int)999999);
        $message = "Dear $password 

        MoneyMindz wishes you Happy B'Day
        
        Click here to become Smart Investor/Earner 08049202111";

        $UserVerification = new UserVerification;
        $UserVerification->unique_id = $number;
        $UserVerification->mobile_token = $OTP;

        //Vrification Mail ##########################################
        $email_token = Str::random(40);

        $UserVerification->email_token= $email_token;
        if($UserVerification->save()){
            $this->sendSMS($number, $message);
            //$this->sendVerificationEmail($data,$email_token);
        }

        //Registration Record #######################################
       
        User::create([
            'reg_id' => $reg_id,
            'name' => $name,
            'email' => $email,
            'mobile' => $number,
            'role' => 'User',
            'adminId' => $adminId,
            'status' => 'InActive',
            'mobile_verification' => 'No',
            'password' => Hash::make($password),
        ]);

        return redirect("college/representative")->with(['status'=>'Success', 'msg'=>'Representative Added']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function representativeajax(Request $request)
    {
        $updateId = $request->updateId;
        $subUser = User::where('id',$updateId)->select('name','email','mobile','status')->first();
        return json_encode($subUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userId = $request->userId;

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|min:10|unique:users',
        ]);

        $name = $request->name;
        $number = $request->mobile;
        $email = $request->email;
        $status = $request->status;

        User::find($userId)->update([
            'name' => $name,
            'email' => $email,
            'mobile' => $number,
            'status' => $status,
        ]);

        return redirect("college/representative")->with(['status'=>'Success', 'msg'=>'Updated Successfuly.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        User::destroy($id);
        return redirect("college/representative")->with(['status'=>'Success', 'msg'=>'Representative Deleted Successfuly.']);
    }
}
