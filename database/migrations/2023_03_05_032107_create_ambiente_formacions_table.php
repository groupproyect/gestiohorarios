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
            $table->unsignedBigInteger('id_area');
            $table->unsignedBigInteger('id_sede');
            $table->foreign('id_area')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sede')->references('id')->on('sedes')->onUpdate('cascade')->onDelete('cascade');
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
