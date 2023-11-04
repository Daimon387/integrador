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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datos_personales')->unique();
            $table->foreign('datos_personales')->references('id')->on('personas')->onDelete('cascade');
            $table->timestamp('fecha_inicio_compra')->nullable();
            $table->float('giro_dinero')->nullable();
            $table->float('deuda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
