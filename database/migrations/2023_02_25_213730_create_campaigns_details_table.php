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
        Schema::create('campaigns_details', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id')->index();
            $table->string('email_subject1')->nullable();
            $table->text('email_body1')->nullable();
            $table->string('use_custom_link1')->nullable();
            $table->integer('article1')->nullable();
            $table->string('email_subject2')->nullable();
            $table->text('email_body2')->nullable();
            $table->string('use_custom_link2')->nullable();
            $table->integer('article2')->nullable();
            $table->string('email_subject3')->nullable();
            $table->text('email_body3')->nullable();
            $table->string('use_custom_link3')->nullable();
            $table->integer('article3')->nullable();
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
        Schema::dropIfExists('campaigns_details');
    }
};
