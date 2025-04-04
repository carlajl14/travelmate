<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas_actividades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->index();
            $table->unsignedBigInteger('id_actividad')->index();
            $table->date('fecha_reserva');
            $table->integer('cantidad_personas');
            $table->double('precio_total');
            $table->string('estado')->default('pendiente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_actividades');
    }
};
