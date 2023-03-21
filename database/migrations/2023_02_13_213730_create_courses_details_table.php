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
        Schema::create('courses_lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->index();
            $table->string('lesson_name_1')->nullable();
            $table->string('lesson_link_1')->nullable();
            $table->string('lesson_name_2')->nullable();
            $table->string('lesson_link_2')->nullable();
            $table->string('lesson_name_3')->nullable();
            $table->string('lesson_link_3')->nullable();
            $table->string('lesson_name_4')->nullable();
            $table->string('lesson_link_4')->nullable();
            $table->string('lesson_name_5')->nullable();
            $table->string('lesson_link_5')->nullable();
            $table->string('lesson_name_6')->nullable();
            $table->string('lesson_link_6')->nullable();
            $table->string('lesson_name_7')->nullable();
            $table->string('lesson_link_7')->nullable();
            $table->string('lesson_name_8')->nullable();
            $table->string('lesson_link_8')->nullable();
            $table->string('lesson_name_9')->nullable();
            $table->string('lesson_link_9')->nullable();
            $table->string('lesson_name_10')->nullable();
            $table->string('lesson_link_10')->nullable();

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
        Schema::dropIfExists('courses_lessons');
    }
};
