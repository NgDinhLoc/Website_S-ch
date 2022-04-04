<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->integer('publishing_company_id')->unsigned();
            $table->integer('product_category_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->string('price');
            $table->string('discount')->nullable();
            $table->boolean('featured');
            $table->string('tag')->nullable();

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
}
