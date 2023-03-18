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
        Schema::create('programa_formacions', function (Blueprint $table) {
            $table->string('codigo_prog')->primary();
            $table->string('nombre');
            $table->string('version');
            $table->string('duracion');
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('id_area');
            $table->unsignedBigInteger('id_niv_formacion');
            $table->foreign('id_area')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_niv_formacion')->references('id')->on('nivel_formacions')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_formacions');
    }
};
