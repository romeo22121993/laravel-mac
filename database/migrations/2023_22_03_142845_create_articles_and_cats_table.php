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
        Schema::create('articles_and_cats', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('article_id')->unsigned();
            $table->unsignedBiginteger('cat_id')->unsigned();

            $table->foreign('article_id')->references('id')
                ->on('articles')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')
                ->on('articleCategories')->onDelete('cascade');

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
        Schema::dropIfExists('posts_and_cats');
    }
};
