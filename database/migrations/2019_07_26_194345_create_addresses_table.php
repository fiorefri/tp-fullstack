<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('id_user')->unsigned();
          $table->foreign('id_user')->references('id')->on('users');
          $table->string('calle');
          $table->string('altura');
          $table->string('piso');
          $table->string('depto');
          $table->string('codigo_postal');
          $table->string('ciudad');
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
        Schema::dropIfExists('addresses');
    }
}
