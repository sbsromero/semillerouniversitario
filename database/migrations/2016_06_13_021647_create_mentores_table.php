<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre',25);
            $table->String('apellidos',60);
            $table->enum('tipoDocumento',['RC','TI', 'CC', 'CE', 'Otro']);
            $table->integer('numeroIdentificacion');
            $table->integer('edad');
            $table->date('fechaNacimiento');
            $table->String('email', 50)->unique();
            $table->String('ciudad', 30);
            $table->String('direccion', 100);
            $table->integer('celular');
            $table->String('eps',120);
            $table->enum('tipoSangre',['A+','A-','B+','B-','AB+','AB-','O+','O-']);

            $table->integer('area_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
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
        Schema::drop('mentores');
    }
}
