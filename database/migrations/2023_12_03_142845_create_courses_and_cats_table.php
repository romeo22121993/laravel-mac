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
        Schema::create('courses_and_cats', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('course_id')->unsigned();
            $table->unsignedBiginteger('cat_id')->unsigned();

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
        Schema::dropIfExists('courses_and_cats');
    }
};
