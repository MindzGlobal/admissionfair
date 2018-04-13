<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeCourseGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_course_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fileType')->nullable();
            $table->string('fileName')->nullable();
            $table->string('filePath')->nullable();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('course_offers')->onDelete('cascade');
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
        Schema::dropIfExists('college_course_galleries');
    }
}