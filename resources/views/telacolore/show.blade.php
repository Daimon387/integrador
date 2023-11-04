@extends('layouts.app')

@section('template_title')
    {{ $telacolore->name ?? "{{ __('Show') Telacolore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Telacolore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telacolores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $telacolore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cinta Id:</strong>
                            {{ $telacolore->cinta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tela Id:</strong>
                            {{ $telacolore->tela_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Llegada:</strong>
                            {{ $telacolore->fecha_llegada }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $telacolore->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Rollo:</strong>
                            {{ $telacolore->nro_rollo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $telacolore->numero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
