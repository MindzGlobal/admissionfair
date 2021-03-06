<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->nullable()->unique();
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('email')->nullable()->unique();
            $table->boolean('email_verified')->default(0);
            $table->string('mobile',11)->nullable()->unique();
            $table->boolean('otp_verified')->default(0);
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode',11)->nullable();
            $table->string('profile_image')->nullable();
            $table->string('address')->nullable();
            $table->text('about_you')->nullable();
            $table->string('role')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->string('fatherName')->nullable();
            $table->string('fatherEmail')->nullable();
            $table->string('fatherMobile',11)->nullable();
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
        Schema::dropIfExists('students');
    }
}
