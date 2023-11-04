<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sucursal_bodega') }}
            {{ Form::text('sucursal_bodega', $transaccione->sucursal_bodega, ['class' => 'form-control' . ($errors->has('sucursal_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Bodega']) }}
            {!! $errors->first('sucursal_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empleado') }}
            {{ Form::text('empleado', $transaccione->empleado, ['class' => 'form-control' . ($errors->has('empleado') ? ' is-invalid' : ''), 'placeholder' => 'Empleado']) }}
            {!! $errors->first('empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $transaccione->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $transaccione->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_venta') }}
            {{ Form::text('total_venta', $transaccione->total_venta, ['class' => 'form-control' . ($errors->has('total_venta') ? ' is-invalid' : ''), 'placeholder' => 'Total Venta']) }}
            {!! $errors->first('total_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productos_retirados') }}
            {{ Form::text('productos_retirados', $transaccione->productos_retirados, ['class' => 'form-control' . ($errors->has('productos_retirados') ? ' is-invalid' : ''), 'placeholder' => 'Productos Retirados']) }}
            {!! $errors->first('productos_retirados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $transaccione->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::text('fecha_vencimiento', $transaccione->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuento') }}
            {{ Form::text('descuento', $transaccione->descuento, ['class' => 'form-control' . ($errors->has('descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo_adicional') }}
            {{ Form::text('costo_adicional', $transaccione->costo_adicional, ['class' => 'form-control' . ($errors->has('costo_adicional') ? ' is-invalid' : ''), 'placeholder' => 'Costo Adicional']) }}
            {!! $errors->first('costo_adicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_deuda') }}
            {{ Form::text('monto_deuda', $transaccione->monto_deuda, ['class' => 'form-control' . ($errors->has('monto_deuda') ? ' is-invalid' : ''), 'placeholder' => 'Monto Deuda']) }}
            {!! $errors->first('monto_deuda', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>