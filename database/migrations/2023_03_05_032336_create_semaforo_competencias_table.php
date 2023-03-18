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
        Schema::create('semaforo_competencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_semaforo')->onUpdate('cascade')->onDelete('cascade')->constrained('semaforos');
            $table->foreignId('cod_competencia')->onUpdate('cascade')->onDelete('cascade')->constrained('competencias');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semaforo_competencias');
    }
};
