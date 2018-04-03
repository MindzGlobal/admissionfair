<?php

namespace App\Model\students;

use Illuminate\Database\Eloquent\Model;

class StudentEducationDetails extends Model
{
    //

    protected $table = 'student_education_details';

    protected $fillable = [
        'student_id'
    ];
}
