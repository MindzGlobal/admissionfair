<?php

namespace App\Model\College;

use Illuminate\Database\Eloquent\Model;

class courseOffers extends Model
{
    protected $table = 'course_offers';

    public function faculties()
    {
        return $this->hasMany('App\Model\College\CollegeFaculties','course_id');
    }
    public function courseGallery()
    {
        return $this->hasMany('App\Model\College\CollegeCourseGalleries','course_id');
    }
}
