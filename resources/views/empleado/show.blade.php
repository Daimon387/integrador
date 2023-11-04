@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $empleado->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $empleado->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo Id:</strong>
                            {{ $empleado->cargo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contratacion:</strong>
                            {{ $empleado->fecha_contratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Sueldo:</strong>
                            {{ $empleado->sueldo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
