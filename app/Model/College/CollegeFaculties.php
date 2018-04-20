<?php

namespace App\Model\College;

use Illuminate\Database\Eloquent\Model;

class CollegeFaculties extends Model
{
    //
    protected $table = 'college_faculties';

    protected $fillable = [
        'faculty_name', 'designation', 'specialization', 'about_faculty', 'faculty_image', 'course_id',
    ];

    public function course()
    {
        return $this->belongsTo('App\Model\College\CollegeCourseGalleries','id');
    }
}
