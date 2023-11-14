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
        Schema::create('detalletransferencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')
                ->references('id')
                ->on('sucursals')
                ->onDelete('cascade');
            $table->unsignedBigInteger('transferencia_id');
            $table->foreign('transferencia_id')
                ->references('id')
                ->on('transferenciainventarios')
                ->onDelete('cascade');
            $table->string('detalle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalletransferencias');
    }
};
