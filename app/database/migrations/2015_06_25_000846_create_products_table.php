<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('products', function($table){
            // autoincrement
            $table->increments('id');
            // columns
            $table->string('name', 50);
            $table->integer('category');
            $table->longText('description')->nullable();
            $table->string('image', 100)->nullable();
            $table->decimal('price', 5, 2)->default(0);
            $table->integer('rate')->default(0);
            // timestamp
            $table->timestamps();
            // reference
            $table->foreign('category')->references('id')->on('categories');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('products', function($table){
            $table->dropForeign('products_category_foreign');
        });
	}

}
