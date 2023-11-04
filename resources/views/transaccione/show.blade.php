@extends('layouts.app')

@section('template_title')
    {{ $transaccione->name ?? "{{ __('Show') Transaccione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transaccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transacciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Bodega:</strong>
                            {{ $transaccione->sucursal_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $transaccione->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $transaccione->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $transaccione->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Total Venta:</strong>
                            {{ $transaccione->total_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Productos Retirados:</strong>
                            {{ $transaccione->productos_retirados }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $transaccione->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $transaccione->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $transaccione->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Adicional:</strong>
                            {{ $transaccione->costo_adicional }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Deuda:</strong>
                            {{ $transaccione->monto_deuda }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
