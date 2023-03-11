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
        Schema::create('ambiente_formacions', function (Blueprint $table) {
            $table->integer('aforo');
            $table->string('id_ambiente',3)->primary();
            $table->foreignId('id_area')->onUpdate('cascade')->onDelete('cascade')->constrained('areas');
            $table->foreignId('id_sede')->onUpdate('cascade')->onDelete('cascade')->constrained('sedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambiente_formacions');
    }
};
