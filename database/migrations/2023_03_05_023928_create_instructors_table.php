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
            $table->boolean('lider')->default(false);
            $table->integer('cant_momentos');
            $table->string('finalizacion_contrato');
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('id_area');
            $table->char('num_doc',10);
            $table->unsignedBigInteger('id_contrato');
            $table->foreign('id_area')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('num_doc')->references('num_doc')->on('personas')->onUpdate('cascade')->onDelete('cascade');           
            $table->foreign('id_contrato')->references('id')->on('tipo_contratos')->onUpdate('cascade')->onDelete('cascade');
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
