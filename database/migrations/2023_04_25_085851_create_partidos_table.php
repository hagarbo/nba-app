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
        Schema::create('partidos', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('equipo_local', 20)->nullable()->index('equipo_local');
            $table->string('equipo_visitante', 20)->nullable()->index('equipo_visitante');
            $table->integer('puntos_local')->nullable();
            $table->integer('puntos_visitante')->nullable();
            $table->string('temporada', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
