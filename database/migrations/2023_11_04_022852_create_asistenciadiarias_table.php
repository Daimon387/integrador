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
        Schema::create('asistenciadiarias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_bodega');
            $table->foreign('sucursal_bodega')->references('id')->on('sucursals')->onDelete('cascade');
            $table->unsignedBigInteger('empleado');
            $table->foreign('empleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->timestamp('fecha_llegada');
            $table->timestamp('fecha_salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistenciadiarias');
    }
};
