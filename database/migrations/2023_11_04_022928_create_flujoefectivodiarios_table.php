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
        Schema::create('flujoefectivodiarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_bodega');
            $table->foreign('sucursal_bodega')->references('id')->on('sucursals')->onDelete('cascade');
            $table->integer('salida');
            $table->float('monto');
            $table->timestamp('hora');
            $table->string('detalle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flujoefectivodiarios');
    }
};
