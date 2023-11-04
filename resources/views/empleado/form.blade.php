<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('datos') }}
            {{ Form::text('datos', $empleado->datos, ['class' => 'form-control' . ($errors->has('datos') ? ' is-invalid' : ''), 'placeholder' => 'Datos']) }}
            {!! $errors->first('datos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $empleado->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $empleado->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_contratacion') }}
            {{ Form::text('fecha_contratacion', $empleado->fecha_contratacion, ['class' => 'form-control' . ($errors->has('fecha_contratacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contratacion']) }}
            {!! $errors->first('fecha_contratacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sueldo') }}
            {{ Form::text('sueldo', $empleado->sueldo, ['class' => 'form-control' . ($errors->has('sueldo') ? ' is-invalid' : ''), 'placeholder' => 'Sueldo']) }}
            {!! $errors->first('sueldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>