<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosSemillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosSemillas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->String('extension',20);

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
        Schema::drop('fotosSemillas');
    }
}
