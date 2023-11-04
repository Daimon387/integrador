<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('transaccion') }}
            {{ Form::text('transaccion', $detalletransaccion->transaccion, ['class' => 'form-control' . ($errors->has('transaccion') ? ' is-invalid' : ''), 'placeholder' => 'Transaccion']) }}
            {!! $errors->first('transaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventario') }}
            {{ Form::text('inventario', $detalletransaccion->inventario, ['class' => 'form-control' . ($errors->has('inventario') ? ' is-invalid' : ''), 'placeholder' => 'Inventario']) }}
            {!! $errors->first('inventario', '<div class="invalid-feedback">:message</div>') !!}
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