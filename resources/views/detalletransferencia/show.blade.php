@extends('layouts.app')

@section('template_title')
    {{ $detalletransferencia->name ?? "{{ __('Show') Detalletransferencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalletransferencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalletransferencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Id:</strong>
                            {{ $detalletransferencia->sucursal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Transferencia Id:</strong>
                            {{ $detalletransferencia->transferencia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $detalletransferencia->detalle }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
