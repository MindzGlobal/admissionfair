<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentAppliedHistory extends Model
{
    protected $table = 'student_applied_histories';

    protected $fillable = [ 'unique_id','student_id','course_dept_id'];
}
