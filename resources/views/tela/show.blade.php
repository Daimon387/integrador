@extends('layouts.app')

@section('template_title')
    {{ $tela->name ?? "{{ __('Show') Tela" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tela</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tela->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Metro:</strong>
                            {{ $tela->precio_metro }}
                        </div>
                        <div class="form-group">
                            <strong>Metraje:</strong>
                            {{ $tela->metraje }}
                        </div>
                        <div class="form-group">
                            <strong>Precio General:</strong>
                            {{ $tela->precio_general }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $tela->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $tela->fecha_creacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
