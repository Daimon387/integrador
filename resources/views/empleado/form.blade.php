<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::select('persona_id',$persona, $empleado->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id',$user, $empleado->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo_id') }}
            {{ Form::select('cargo_id',$cargo, $empleado->cargo_id, ['class' => 'form-control' . ($errors->has('cargo_id') ? ' is-invalid' : ''), 'placeholder' => 'Cargo Id']) }}
            {!! $errors->first('cargo_id', '<div class="invalid-feedback">:message</div>') !!}
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