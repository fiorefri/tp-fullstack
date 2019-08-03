<?php

use Illuminate\Support\Facades\Schema;
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
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('descripcion');
          $table->string('precio');
          $table->string('stock');
          $table->bigInteger('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->bigInteger('offer_id')->unsigned();
          $table->foreign('offer_id')->references('id')->on('offers');
          $table->string('imagen');
          $table->rememberToken();
          $table->timestamps();
          $table->softDeletes();
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
