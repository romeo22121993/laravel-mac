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
        Schema::create('campaign_scheduling_emails', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id');
            $table->integer('campaign_detail_id');
            $table->integer('user_id');
            $table->text('email_subject')->nullable();
            $table->text('email_body')->nullable();
            $table->string('user_list')->nullable();
            $table->string('status')->nullable();
            $table->text('statistics')->nullable();
            $table->integer('sending_iteration')->nullable();
            $table->integer('count_get_users')->nullable();
            $table->string('sending_time')->nullable();
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
        Schema::dropIfExists('campaign_scheduling_emails');
    }
};
