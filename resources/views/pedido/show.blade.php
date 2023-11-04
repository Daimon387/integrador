@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Transaccion Id:</strong>
                            {{ $pedido->transaccion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Factura:</strong>
                            {{ $pedido->nro_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Destino:</strong>
                            {{ $pedido->lugar_destino }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $pedido->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pedido->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
