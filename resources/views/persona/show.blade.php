@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? "{{ __('Show') Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $persona->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $persona->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $persona->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $persona->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $persona->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $persona->fecha_nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
