<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sucursal_id') }}
            {{ Form::text('sucursal_id', $detalletransferencia->sucursal_id, ['class' => 'form-control' . ($errors->has('sucursal_id') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Id']) }}
            {!! $errors->first('sucursal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transferencia_id') }}
            {{ Form::text('transferencia_id', $detalletransferencia->transferencia_id, ['class' => 'form-control' . ($errors->has('transferencia_id') ? ' is-invalid' : ''), 'placeholder' => 'Transferencia Id']) }}
            {!! $errors->first('transferencia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $detalletransferencia->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>