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
            $table->foreignId('id_area')->onUpdate('cascade')->onDelete('cascade')->constrained('areas');
            $table->foreignId('id_niv_formacion')->onUpdate('cascade')->restrictOnDelete()->constrained('nivel_formacions');

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
