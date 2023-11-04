@extends('layouts.app')

@section('template_title')
    {{ $detalletransaccion->name ?? "{{ __('Show') Detalletransaccion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalletransaccion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalletransaccions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Transaccion:</strong>
                            {{ $detalletransaccion->transaccion }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario:</strong>
                            {{ $detalletransaccion->inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalletransaccion->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Metro:</strong>
                            {{ $detalletransaccion->precio_metro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
