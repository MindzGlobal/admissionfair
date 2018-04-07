<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PayuPayment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'txnid','account_id', 'mihpayid', 'password', 'firstname', 'lastname', 'email','phone', 'amount', 'status', 'unmappedstatus', 'mode', 'bank_ref_num','bankcode', 'data', 'account',
    ];
}
