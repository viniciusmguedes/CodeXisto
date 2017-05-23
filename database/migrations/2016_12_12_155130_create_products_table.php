<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->integer('seller_id')->unsigned();
          $table->foreign('seller_id')->references('id')->on('sellers');
          $table->integer('status_id')->unsigned();
          $table->foreign('status_id')->references('id')->on('status');
          $table->string('name');
          $table->text('description');
          $table->decimal('price');
          $table->integer('featured')->default(0);
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
        Schema::drop('products');
    }
}
