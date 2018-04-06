<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAppliedHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_applied_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('college_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('course')->nullable();
            $table->string('department')->nullable();
            $table->string('course_amount')->nullable();
            $table->string('pay_status')->nullable();
            $table->string('student_query')->nullable();
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
        Schema::dropIfExists('student_applied_histories');
    }
}
