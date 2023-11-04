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
        Schema::create('detalletransaccions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaccion');
            $table->foreign('transaccion')->references('id')->on('transacciones')->onDelete('cascade');
            $table->unsignedBigInteger('inventario');
            $table->foreign('inventario')->references('id')->on('inventarios')->onDelete('cascade');
            $table->integer('cantidad');
            $table->float('precio_metro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalletransaccions');
    }
};
