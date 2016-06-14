<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semillas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 25);
            $table->String('apellidos', 60);
            $table->enum('tipoDocumento',['RC','TI', 'CC', 'CE', 'Otro']);
            $table->integer('numeroIdentificacion');
            $table->date('fechaNacimiento');
            $table->String('direccion', 100);
            $table->String('ciudad', 30);
            $table->String('email', 50)->unique();
            $table->enum('facebook',['Si','No']);
            $table->String('emailFb', 50)->unique();
            $table->integer('telefonoFijo');
            $table->integer('celular');
            $table->enum('whatsapp',['Si','No']);
            $table->enum('gradoEscolar',['Pre jardin','Jardin','Transicion','Primero','Segundo',
                'Tercero','Cuarto','Quinto','Sexto','Septimo','Octavo','Noveno','Decimo',
                'Once','TerminoBachillerato','NoEstudia']);
            $table->String('areaInteres',80);
            $table->enum('horario',['Mañana','Tarde']);
            $table->String('enfermedades');
            $table->String('eps',120);
            $table->enum('tipoSangre',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->String('enterado',30);
            $table->String('comentario');

            $table->integer('grupo_id')->unsigned();
            $table->integer('area_id')->unsigned();


            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
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
        Schema::drop('semillas');
    }
}
