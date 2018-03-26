<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_education_details', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('student_id')->nullable(false)->unique();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_medium')->nullable();
            $table->string('ssc_yop')->nullable();
            $table->string('ssc_marks')->nullable();
            $table->string('ssc_perc')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_medium')->nullable();
            $table->string('hsc_yop')->nullable();
            $table->string('hsc_marks')->nullable();
            $table->string('hsc_perc')->nullable();
            $table->timestamps();
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_education_details');
    }
}
