<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_offers', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('reg_id')->nullable()->unique();
            $table->string('course_offer')->nullable();
            $table->string('course_department')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_total_fee')->nullable();
            $table->string('fee_structure_file_name')->nullable();
            $table->string('fee_structure_file_url')->nullable();
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
        Schema::dropIfExists('course_offers');
    }
}
