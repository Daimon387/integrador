@extends('layouts.app')

@section('template_title')
    {{ $asistenciadiaria->name ?? "{{ __('Show') Asistenciadiaria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asistenciadiaria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asistenciadiarias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Bodega:</strong>
                            {{ $asistenciadiaria->sucursal_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $asistenciadiaria->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Llegada:</strong>
                            {{ $asistenciadiaria->fecha_llegada }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Salida:</strong>
                            {{ $asistenciadiaria->fecha_salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
