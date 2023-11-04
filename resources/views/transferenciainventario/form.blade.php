<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_transaccion') }}
            {{ Form::text('fecha_transaccion', $transferenciainventario->fecha_transaccion, ['class' => 'form-control' . ($errors->has('fecha_transaccion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Transaccion']) }}
            {!! $errors->first('fecha_transaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_transferida') }}
            {{ Form::text('cantidad_transferida', $transferenciainventario->cantidad_transferida, ['class' => 'form-control' . ($errors->has('cantidad_transferida') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Transferida']) }}
            {!! $errors->first('cantidad_transferida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sucursal_bodega_origen') }}
            {{ Form::text('sucursal_bodega_origen', $transferenciainventario->sucursal_bodega_origen, ['class' => 'form-control' . ($errors->has('sucursal_bodega_origen') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Bodega Origen']) }}
            {!! $errors->first('sucursal_bodega_origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventario') }}
            {{ Form::text('inventario', $transferenciainventario->inventario, ['class' => 'form-control' . ($errors->has('inventario') ? ' is-invalid' : ''), 'placeholder' => 'Inventario']) }}
            {!! $errors->first('inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $transferenciainventario->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>