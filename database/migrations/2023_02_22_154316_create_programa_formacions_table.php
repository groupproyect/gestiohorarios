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
            $table->string('codigo_prog' , 20)->primary();
            $table->string('nombre_prog');
            $table->string('version');
            $table->string('duracion');
            $table->boolean('estado');
            $table->string('id_area');
            $table->string('id_nivel_formacion');
           
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
