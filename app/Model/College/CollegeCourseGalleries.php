<?php

namespace App\Model\College;

use Illuminate\Database\Eloquent\Model;

class CollegeCourseGalleries extends Model
{
    //
    protected $table = 'college_course_galleries';
    

    public function course()
    {
        return $this->belongsTo('App\Model\College\CollegeCourseGalleries','id');
    }
}
