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
            $table->string('reg_id')->nullable();
            $table->string('course_offer')->nullable();
            $table->string('course_department')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_total_fee')->nullable();
            $table->string('available_seat')->nullable();
            $table->text('course_description')->nullable();
            $table->text('why_join_us')->nullable();
            $table->text('what_we_offer')->nullable();
            $table->text('fee_structure')->nullable();
            $table->text('Payment_mode')->nullable();
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
