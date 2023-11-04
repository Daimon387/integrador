<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('transaccion') }}
            {{ Form::text('transaccion', $pedido->transaccion, ['class' => 'form-control' . ($errors->has('transaccion') ? ' is-invalid' : ''), 'placeholder' => 'Transaccion']) }}
            {!! $errors->first('transaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_factura') }}
            {{ Form::text('nro_factura', $pedido->nro_factura, ['class' => 'form-control' . ($errors->has('nro_factura') ? ' is-invalid' : ''), 'placeholder' => 'Nro Factura']) }}
            {!! $errors->first('nro_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar_destino') }}
            {{ Form::text('lugar_destino', $pedido->lugar_destino, ['class' => 'form-control' . ($errors->has('lugar_destino') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Destino']) }}
            {!! $errors->first('lugar_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $pedido->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $pedido->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>