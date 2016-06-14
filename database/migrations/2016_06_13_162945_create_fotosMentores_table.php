<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosMentores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->String('extension',20);

            $table->integer('mentor_id')->unsigned();
            $table->foreign('mentor_id')->references('id')->on('mentores')->onDelete('cascade');
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
        Schema::drop('fotosMentores');
    }
}
