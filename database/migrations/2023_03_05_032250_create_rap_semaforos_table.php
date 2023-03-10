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
        Schema::create('rap_semaforos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rap')->onUpdate('cascade')->onDelete('cascade')->constrained('raps');
            $table->foreignId('id_semaforo')->onUpdate('cascade')->onDelete('cascade')->constrained('semaforos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rap_semaforos');
    }
};
