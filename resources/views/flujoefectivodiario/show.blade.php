@extends('layouts.app')

@section('template_title')
    {{ $flujoefectivodiario->name ?? "{{ __('Show') Flujoefectivodiario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Flujoefectivodiario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('flujoefectivodiarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Bodega:</strong>
                            {{ $flujoefectivodiario->sucursal_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $flujoefectivodiario->salida }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $flujoefectivodiario->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $flujoefectivodiario->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $flujoefectivodiario->detalle }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
