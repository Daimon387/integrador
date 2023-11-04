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
        Schema::create('preciotelasucursals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_bodega');
            $table->foreign('sucursal_bodega')->references('id')->on('sucursals')->onDelete('cascade');
            $table->unsignedBigInteger('tela_id');
            $table->foreign('tela_id')->references('id')->on('telas')->onDelete('cascade');
            $table->float('precio_metro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preciotelasucursals');
    }
};
