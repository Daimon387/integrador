@extends('layouts.app')

@section('template_title')
    {{ $preciotelasucursal->name ?? "{{ __('Show') Preciotelasucursal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Preciotelasucursal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preciotelasucursals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal Bodega:</strong>
                            {{ $preciotelasucursal->sucursal_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Tela:</strong>
                            {{ $preciotelasucursal->tela }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Metro:</strong>
                            {{ $preciotelasucursal->precio_metro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
