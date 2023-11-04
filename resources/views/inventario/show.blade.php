@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? "{{ __('Show') Inventario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal:</strong>
                            {{ $inventario->sucursal }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $inventario->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventario->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Metraje:</strong>
                            {{ $inventario->metraje }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Metro Diferente:</strong>
                            {{ $inventario->precio_metro_diferente }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $inventario->detalle }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
