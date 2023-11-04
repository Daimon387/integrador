@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Show') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Bodega:</strong>
                            {{ $pago->sucursal_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Transaccion Id:</strong>
                            {{ $pago->transaccion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Metodo Pago:</strong>
                            {{ $pago->metodo_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $pago->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Pagado:</strong>
                            {{ $pago->monto_pagado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
