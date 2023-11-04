@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Datos Personales:</strong>
                            {{ $cliente->datos_personales }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Compra:</strong>
                            {{ $cliente->fecha_inicio_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Giro Dinero:</strong>
                            {{ $cliente->giro_dinero }}
                        </div>
                        <div class="form-group">
                            <strong>Deuda:</strong>
                            {{ $cliente->deuda }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
