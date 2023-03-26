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
            $table->string('num_ficha')->primary();
            $table->string('codigo_prog');
            $table->integer('cant_aprend');
            $table->boolean('cadena_formacion')->default(false);
            $table->integer('trimestre');
            $table->date('inicio_formacion');
            $table->date('fin_formacion');
            $table->unsignedBigInteger('id_jornada');
            $table->boolean('estado')->default(true);
            $table->foreign('codigo_prog')->references('codigo_prog')->on('programa_formacions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jornada')->references('id')->on('jornadas')->onUpdate('cascade')->onDelete('cascade');



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
