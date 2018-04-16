<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faculty_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('specialization')->nullable();
            $table->text('about_faculty')->nullable();
            $table->string('faculty_image')->nullable();
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
        Schema::dropIfExists('college_faculties');
    }
}
