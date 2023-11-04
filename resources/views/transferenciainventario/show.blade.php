@extends('layouts.app')

@section('template_title')
    {{ $transferenciainventario->name ?? "{{ __('Show') Transferenciainventario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transferenciainventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transferenciainventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Transaccion:</strong>
                            {{ $transferenciainventario->fecha_transaccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Transferida:</strong>
                            {{ $transferenciainventario->cantidad_transferida }}
                        </div>
                        <div class="form-group">
                            <strong>Sucursal Bodega Origen:</strong>
                            {{ $transferenciainventario->sucursal_bodega_origen }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario:</strong>
                            {{ $transferenciainventario->inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $transferenciainventario->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
