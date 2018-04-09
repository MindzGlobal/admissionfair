<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use Tzsk\Payu\Facade\Payment;
use App\User;
use App\Model\PayuPayment;
use Auth;
use App\Model\StudentAppliedHistory;
use App\Model\College\courseOffers;


class PaymentController extends Controller
{
   
    protected $selected_pack;
    protected $name;
    protected $emaill;
    protected $mobile;
    protected $amount;
    protected $student=null;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
           
            if(Auth::guard('web')->user()==null){
                $this->student= Auth::guard('student')->user();
            }
            return $next($request);
        });
     }
   


    public function collegePay(Request $request){
        $this->selected_pack = $request->subscribe;
        $this->name = Auth::user()->name;
        $this->mobile = Auth::user()->mobile;
        $this->email = Auth::user()->email;
        switch ($this->selected_pack) {
            case "Free":
                User::where('reg_id',Auth::user()->reg_id)->update(['compilation_status'=>'Done']); 
                return redirect()->route('dashboard')->with(['status'=>'Success', 'msg'=>'Accout Activated Successfuly.']);
                break;
            case "Gold":
            $this->amount = 1000;
                break;
            case "Platinum":
            $this->amount = 5000;
                break;
            case "Dimond":
            $this->amount = 10000;
                break;    
            default:
            $this->amount = 100000;
        }

        if($this->selected_pack != 'Free'){
            //User::where('reg_id',Auth::user()->reg_id)->update(['compilation_status'=>'Done']);
            $data = [
                'txnid' => strtoupper(str_random(8)), # Transaction ID.
                'amount' => $this->amount, # Amount to be charged.
                'productinfo' => $this->selected_pack,
                'firstname' => $this->name, # Payee Name.
                'email' => $this->email, # Payee Email Address.
                'phone' => $this->mobile, # Payee Phone Number.
               ];
               
               return Payment::make($data, function($then) {
                    $then->redirectTo('paystatus'); # Your Status page endpoint.
               });
        }

    }

    function status(){
        $payment = Payment::capture();
        $array = json_decode($payment, true);
        $reg_array = array('account_id'=>Auth::User()->reg_id);
        if(PayuPayment::where('txnid',$array['txnid'])->count() == 0){
            PayuPayment::create($array+$reg_array);
            if($array['txnid']=='success')
            {
                User::where('reg_id',Auth::user()->reg_id)->update(['compilation_status'=>'Done']);
            }
        }
        return view('college.empty',['payment'=>$payment]);
    }
    
 


public function pay(){

    $data = [
    'txnid' => strtoupper(str_random(8)), # Transaction ID.
    'amount' => rand(100, 999), # Amount to be charged.
    'productinfo' => $this->selected_pack,
    'firstname' => $this->name, # Payee Name.
    'email' => $this->email, # Payee Email Address.
    'phone' => $this->mobile, # Payee Phone Number.
   ];
   
   return Payment::make($data, function($then) {
    $then->redirectTo('paystatus'); # Your Status page endpoint.
   });

   }


   protected function studentPay(Request $request){
   

    $college= User::where('reg_id',$request->college_id)->first();
    $course = courseOffers::find($request->dept_id);

    $studentApplied = new StudentAppliedHistory();
    $studentApplied->college_id= $college->reg_id;
    $studentApplied->student_id=Auth::User()->student_id;
    $studentApplied->course=$course->course_offer;
    $studentApplied->department=$course->course_department;
    $studentApplied->course_amount=str_replace(',', '', $course->course_total_fee);
    $studentApplied->pay_status='Pending';
    $studentApplied->student_query=$request->student_query;
    //dd($studentApplied);
   if($studentApplied->save()){
    
    $data = [
        'txnid' => strtoupper(str_random(8)), # Transaction ID.
        'amount' => $studentApplied->course_amount, # Amount to be charged.
        'productinfo' => $studentApplied->course.':'.$studentApplied->department,
        'firstname' => Auth::User()->first_name, # Payee Name.
        'firstname' => Auth::User()->last_name, # Payee Name.
        'email' => Auth::User()->email, # Payee Email Address.
        'phone' => Auth::User()->mobile, # Payee Phone Number.
       ];
       return Payment::make($data, function($then) {

            $then->redirectTo('studentpaystatus'); # Your Status page endpoint.
        });
   }

   }


   protected function studentStatus(){
        $payment = Payment::capture();
        $array = json_decode($payment, true);
         dd($array);
        $reg_array = array('account_id'=>Auth::User()->reg_id);
        if(PayuPayment::where('txnid',$array['txnid'])->count() == 0){
            PayuPayment::create($array+$reg_array);
            if($array['txnid']=='success')
            {
                Student::where('student_id',Auth::user()->student_id)->update(['compilation_status'=>'Done']);
            }
        }
        return view('college.empty',['payment'=>$payment]);
    }
}
