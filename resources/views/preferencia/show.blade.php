@extends('layouts.app')

@section('template_title')
    {{ $preferencia->name ?? "{{ __('Show') Preferencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Preferencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preferencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $preferencia->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tela Id:</strong>
                            {{ $preferencia->tela_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
