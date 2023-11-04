<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sucursal') }}
            {{ Form::text('sucursal', $inventario->sucursal, ['class' => 'form-control' . ($errors->has('sucursal') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal']) }}
            {!! $errors->first('sucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $inventario->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $inventario->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metraje') }}
            {{ Form::text('metraje', $inventario->metraje, ['class' => 'form-control' . ($errors->has('metraje') ? ' is-invalid' : ''), 'placeholder' => 'Metraje']) }}
            {!! $errors->first('metraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_metro_diferente') }}
            {{ Form::text('precio_metro_diferente', $inventario->precio_metro_diferente, ['class' => 'form-control' . ($errors->has('precio_metro_diferente') ? ' is-invalid' : ''), 'placeholder' => 'Precio Metro Diferente']) }}
            {!! $errors->first('precio_metro_diferente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $inventario->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>