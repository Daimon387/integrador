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
            $table->string('detalle')->nullable();
            $table->string('nro_rollo')->nullable();
            $table->string('numero')->nullable();
            $table->unsignedBigInteger('cinta');
            $table->foreign('cinta')->references('id')->on('cintas')->onDelete('cascade');
            $table->unsignedBigInteger('producto');
            $table->foreign('producto')->references('id')->on('telas')->onDelete('cascade');
            $table->timestamp('fecha_llegada');
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
