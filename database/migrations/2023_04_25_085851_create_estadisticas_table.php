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
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->string('temporada', 5);
            $table->integer('jugador')->index('jugador');
            $table->float('Puntos_por_partido', 10, 0)->nullable();
            $table->float('Asistencias_por_partido', 10, 0)->nullable();
            $table->float('Tapones_por_partido', 10, 0)->nullable();
            $table->float('Rebotes_por_partido', 10, 0)->nullable();

            $table->primary(['temporada', 'jugador']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas');
    }
};
