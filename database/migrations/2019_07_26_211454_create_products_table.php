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
          $table->bigInteger('id_category')->unsigned();
          $table->foreign('id_category')->references('id')->on('categories');
          $table->bigInteger('id_offer')->unsigned();
          $table->foreign('id_offer')->references('id')->on('offers');
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
