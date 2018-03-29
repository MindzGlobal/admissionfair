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
        Schema::create('student__graduation___details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_id')->nullable(false)->unique();
            $table->string('university_name')->nullable();
            $table->string('college_name')->nullable();
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
        Schema::dropIfExists('student__graduation___details');
    }
}
