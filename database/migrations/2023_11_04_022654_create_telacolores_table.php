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
        Schema::create('telacolores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('cinta_id');
            $table->foreign('cinta_id')->references('id')->on('cintas')->onDelete('cascade');
            $table->unsignedBigInteger('tela_id');
            $table->foreign('tela_id')->references('id')->on('telas')->onDelete('cascade');
            $table->date('fecha_llegada');
            $table->string('detalle')->nullable();
            $table->string('nro_rollo')->nullable();
            $table->string('numero')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telacolores');
    }
};
