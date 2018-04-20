<?php

namespace App\Model\College;

use Illuminate\Database\Eloquent\Model;

class CollegeFaculties extends Model
{
    //
    protected $table = 'college_faculties';

    public function course()
    {
        return $this->belongsTo('App\Model\College\courseOffers','id');
    }
}
