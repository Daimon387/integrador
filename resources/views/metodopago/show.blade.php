@extends('layouts.app')

@section('template_title')
    {{ $metodopago->name ?? "{{ __('Show') Metodopago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Metodopago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('metodopagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $metodopago->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Cuenta:</strong>
                            {{ $metodopago->nro_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cuenta:</strong>
                            {{ $metodopago->nombre_cuenta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
