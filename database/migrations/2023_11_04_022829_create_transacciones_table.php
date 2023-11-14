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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_bodega');
            $table->foreign('sucursal_bodega')->references('id')->on('sucursals')->onDelete('cascade');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->date('fecha');
            $table->float('total_venta');
            $table->integer('productos_retirados')->nullable();
            $table->string('detalle')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->float('descuento')->nullable();
            $table->float('costo_adicional')->nullable();
            $table->float('monto_deuda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
