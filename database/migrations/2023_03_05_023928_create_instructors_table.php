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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->char('num_doc',10);
            $table->boolean('lider')->default(false);
            $table->integer('cant_momentos');
            $table->string('finalizacion_contrato');
            $table->boolean('estado')->default(true);
            $table->foreignId('id_area')->onUpdate('cascade')->onDelete('cascade')->constrained('areas');
            $table->foreign('num_doc')->references('num_doc')->on('personas')->onUpdate('cascade')->onDelete('cascade');           
            $table->foreignId('id_contrato')->onUpdate('cascade')->onDelete('cascade')->constrained('tipo_contratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
    }
};
