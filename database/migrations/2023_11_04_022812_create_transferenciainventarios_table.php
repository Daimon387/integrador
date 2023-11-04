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
        Schema::create('transferenciainventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_transaccion');
            $table->integer('cantidad_transferida');
            $table->unsignedBigInteger('sucursal_bodega_origen');
            $table->foreign('sucursal_bodega_origen')->references('id')->on('sucursals')->onDelete('cascade');
            $table->unsignedBigInteger('inventario_id');
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transferenciainventarios');
    }
};
