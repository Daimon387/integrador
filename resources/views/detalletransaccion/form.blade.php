<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('transaccion_id') }}
            {{ Form::text('transaccion_id', $detalletransaccion->transaccion_id, ['class' => 'form-control' . ($errors->has('transaccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Transaccion Id']) }}
            {!! $errors->first('transaccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventario_id') }}
            {{ Form::text('inventario_id', $detalletransaccion->inventario_id, ['class' => 'form-control' . ($errors->has('inventario_id') ? ' is-invalid' : ''), 'placeholder' => 'Inventario Id']) }}
            {!! $errors->first('inventario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalletransaccion->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_metro') }}
            {{ Form::text('precio_metro', $detalletransaccion->precio_metro, ['class' => 'form-control' . ($errors->has('precio_metro') ? ' is-invalid' : ''), 'placeholder' => 'Precio Metro']) }}
            {!! $errors->first('precio_metro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>