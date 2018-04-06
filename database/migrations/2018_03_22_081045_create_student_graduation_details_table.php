<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGraduationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_graduation_details', function (Blueprint $table) {
                $table->increments('id');
                $table->string('student_id')->nullable(false);
                $table->string('university_name')->nullable();
                $table->string('college_name')->nullable();
                $table->string('graduation_type')->nullable();
                $table->string('course')->nullable();
                $table->string('department')->nullable();
                $table->string('college_yop')->nullable();
                $table->string('marks')->nullable();
                $table->string('percentage')->nullable();
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
        Schema::dropIfExists('student_graduation_details');
    }
}
