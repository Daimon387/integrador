<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('sucursal_bodega') }}
                    {{ Form::text('sucursal_bodega', $asistenciadiaria->sucursal_bodega, ['class' => 'form-control' . ($errors->has('sucursal_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Bodega']) }}
                    {!! $errors->first('sucursal_bodega', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('empleado_id') }}
                    {{ Form::text('empleado_id', $asistenciadiaria->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Id']) }}
                    {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('fecha') }}
                    {{ Form::date('fecha', $asistenciadiaria->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
                    {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('horario_entrada') }}
                    {{ Form::time('horario_entrada', $asistenciadiaria->horario_entrada, ['class' => 'form-control' . ($errors->has('horario_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Horario Entrada']) }}
                    {!! $errors->first('horario_entrada', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('horario_salida') }}
                    {{ Form::time('horario_salida', $asistenciadiaria->horario_salida, ['class' => 'form-control' . ($errors->has('horario_salida') ? ' is-invalid' : ''), 'placeholder' => 'Horario Salida']) }}
                    {!! $errors->first('horario_salida', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>