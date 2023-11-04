<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $metodopago->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_cuenta') }}
            {{ Form::text('nro_cuenta', $metodopago->nro_cuenta, ['class' => 'form-control' . ($errors->has('nro_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Nro Cuenta']) }}
            {!! $errors->first('nro_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cuenta') }}
            {{ Form::text('nombre_cuenta', $metodopago->nombre_cuenta, ['class' => 'form-control' . ($errors->has('nombre_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cuenta']) }}
            {!! $errors->first('nombre_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>