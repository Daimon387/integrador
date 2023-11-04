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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal')->unique();
            $table->foreign('sucursal')->references('id')->on('sucursals')->onDelete('cascade');
            $table->unsignedBigInteger('producto');
            $table->foreign('producto')->references('id')->on('telacolores')->onDelete('cascade');
            $table->integer('cantidad');
            $table->float('metraje');
            $table->float('precio_metro_diferente')->nullable();
            $table->string('detalle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
