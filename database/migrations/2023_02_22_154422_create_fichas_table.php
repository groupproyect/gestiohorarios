<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
           $table->string('num_ficha',20)->primarykey();
           $table->integer('cant_aprend');
           $table->boolean('cadena_formacion');
           $table->integer('trismestre');
           $table->date('inicio_formacion');
           $table->date('fin_formacion');
           $table->boolean('estado');
           $table->string('id_jornada');
           $table->string('codigo_prog' , 20);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
};
