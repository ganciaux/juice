<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('rate')->unsigned();
            $table->integer('done')->unsigned();
            $table->text('comment');
            $table->timestamps();
        });

        Schema::create('juice_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('juice_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('juice_id')->references('id')->on('juices');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juice_product');
        Schema::dropIfExists('juices');
    }
}
