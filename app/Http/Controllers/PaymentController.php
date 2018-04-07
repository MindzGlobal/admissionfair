<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use Tzsk\Payu\Facade\Payment;
use App\User;
use App\Model\PayuPayment;
use Auth;


class PaymentController extends Controller
{
   
    protected $selected_pack;
    protected $name;
    protected $emaill;
    protected $mobile;
    protected $amount;

    public function collegePay(Request $request){
        $this->selected_pack = $request->subscribe;
        $this->name = Auth::user()->name;
        $this->mobile = Auth::user()->mobile;
        $this->email = Auth::user()->email;
        switch ($this->selected_pack) {
            case "Free":
                User::where('reg_id',Auth::user()->reg_id)->update(['compilation_status'=>'Done']); 
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
}
