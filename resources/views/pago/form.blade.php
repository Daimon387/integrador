<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sucursal_bodega') }}
            {{ Form::text('sucursal_bodega', $pago->sucursal_bodega, ['class' => 'form-control' . ($errors->has('sucursal_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Bodega']) }}
            {!! $errors->first('sucursal_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transaccion_id') }}
            {{ Form::text('transaccion_id', $pago->transaccion_id, ['class' => 'form-control' . ($errors->has('transaccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Transaccion Id']) }}
            {!! $errors->first('transaccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metodo_pago') }}
            {{ Form::text('metodo_pago', $pago->metodo_pago, ['class' => 'form-control' . ($errors->has('metodo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Metodo Pago']) }}
            {!! $errors->first('metodo_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $pago->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_pagado') }}
            {{ Form::text('monto_pagado', $pago->monto_pagado, ['class' => 'form-control' . ($errors->has('monto_pagado') ? ' is-invalid' : ''), 'placeholder' => 'Monto Pagado']) }}
            {!! $errors->first('monto_pagado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>