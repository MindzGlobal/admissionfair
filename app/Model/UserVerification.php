<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    //
    protected $table = 'user_verifications';

    protected $fillable = ['unique_id'];

    
}
