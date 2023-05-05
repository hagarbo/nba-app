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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('Nombre', 30)->nullable();
            $table->string('Procedencia', 20)->nullable();
            $table->string('Altura', 4)->nullable();
            $table->integer('Peso')->nullable();
            $table->string('Posicion', 5)->nullable();
            $table->string('Nombre_equipo', 20)->nullable()->index('Nombre_equipo');
            $table->string('nba_id', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
};
