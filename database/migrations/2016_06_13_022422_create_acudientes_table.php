<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre',120);
            $table->String('parentesco', 50);
            $table->String('direccion',100);
            $table->integer('telefono');
            $table->enum('whatsapp',['Si','No']);

            $table->integer('semilla_id')->unsigned();
            $table->foreign('semilla_id')->references('id')->on('semillas')->onDelete('cascade');
            
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
        Schema::drop('acudientes');
    }
}
