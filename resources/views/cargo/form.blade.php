<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cargo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle_cargo') }}
            {{ Form::text('detalle_cargo', $cargo->detalle_cargo, ['class' => 'form-control' . ($errors->has('detalle_cargo') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Cargo']) }}
            {!! $errors->first('detalle_cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo_superior') }}
            {{ Form::text('cargo_superior', $cargo->cargo_superior, ['class' => 'form-control' . ($errors->has('cargo_superior') ? ' is-invalid' : ''), 'placeholder' => 'Cargo Superior']) }}
            {!! $errors->first('cargo_superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>