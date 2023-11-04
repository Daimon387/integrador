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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datos')->unique();
            $table->foreign('datos')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('usuario')->unique();
            $table->foreign('usuario')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('cargo');
            $table->foreign('cargo')->references('id')->on('cargos')->onDelete('cascade');
            $table->timestamp('fecha_contratacion')->nullable();
            $table->float('sueldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
