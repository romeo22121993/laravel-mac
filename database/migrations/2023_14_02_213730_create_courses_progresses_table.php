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
        Schema::create('courses_progresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->text('last_iteraction')->nullable();
            $table->text('progress_bar_lessons_seconds')->nullable();
            $table->text('completed_courses')->nullable();
            $table->string('progress_bar_courses')->nullable();
            $table->string('progress_bar_lessons')->nullable();
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
        Schema::dropIfExists('courses_progresses');
    }

};
