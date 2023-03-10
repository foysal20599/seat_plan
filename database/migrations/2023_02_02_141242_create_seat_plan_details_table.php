<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_plan_details', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('name');
            $table->foreignId('seat_plan_id');
            $table->foreignId('batch_id');
            $table->foreignId('section_id');
            $table->foreignId('user_id')->comment('teacher id');
            $table->foreignId('course_id');
            $table->foreignId('room_id');
            $table->foreign('seat_plan_id')->references('id')->on('seat_plans');
            $table->foreign('batch_id')->references('id')->on('batches');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('seat_plan_details');
    }
};
