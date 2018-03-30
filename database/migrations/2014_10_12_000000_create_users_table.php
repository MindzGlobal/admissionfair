<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_id')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->enum('email_verification', ['No', 'Yes']);
            $table->string('mobile',11)->nullable()->unique();
            $table->enum('mobile_verification', ['No', 'Yes']);
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode',11)->nullable();
            $table->string('role')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_image')->default('college/images/profile_images/profile.png');
            $table->string('university_name')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_email')->nullable();
            $table->string('college_number_1')->nullable();
            $table->string('college_number_2')->nullable();
            $table->string('website')->nullable();
            $table->string('college_state')->nullable();
            $table->string('college_city')->nullable();
            $table->string('college_pincode')->nullable();
            $table->string('college_address')->nullable();
            $table->string('college_type')->nullable();
            $table->string('college_category')->nullable();
            $table->string('college_booth')->nullable();
            $table->string('compilation_status')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
