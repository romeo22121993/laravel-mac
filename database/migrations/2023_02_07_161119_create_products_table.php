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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->string('qty');
            $table->string('tags');
            $table->string('size')->nullable();
            $table->string('color');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('short_description');
            $table->string('long_description');
            $table->string('thumbnail');
            $table->integer('hot_deals')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('special_offer')->nullable();
            $table->integer('special_deals')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
