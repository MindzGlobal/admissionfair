<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_id')->nullable()->unique();
            $table->string('university_name')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_email')->nullable();
            $table->string('college_number_1')->nullable();
            $table->string('college_number_2')->nullable();
            $table->string('website')->nullable();
            $table->string('college_state')->nullable();
            $table->string('college_city')->nullable();
            $table->string('college_pincode')->nullable();
            $table->string('college_type')->nullable();
            $table->string('college_category')->nullable();
            $table->string('college_booth')->nullable();
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
        Schema::dropIfExists('college_details');
    }
}
