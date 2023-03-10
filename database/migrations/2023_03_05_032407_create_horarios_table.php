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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('num_ficha');
            $table->boolean('estado')->default(true);
            $table->boolean('lunes')->default(false);
            $table->boolean('martes')->default(false);
            $table->boolean('miercoles')->default(false);
            $table->boolean('jueves')->default(false);
            $table->boolean('viernes')->default(false);
            $table->string('id_ambiente');
            $table->foreignId('id_trimestre')->onUpdate('cascade')->onDelete('cascade')->constrained('trimestres');
            $table->foreign('id_ambiente')->references('id_ambiente')->on('ambiente_formacions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_sem_com')->onUpdate('cascade')->onDelete('cascade')->constrained('semaforo_competencias');
            $table->foreignId('id_instructor')->onUpdate('cascade')->onDelete('cascade')->constrained('instructors');
            $table->foreign('num_ficha')->references('num_ficha')->on('fichas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
