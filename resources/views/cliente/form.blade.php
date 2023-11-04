<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::select('persona_id',$personas, $cliente->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_compra') }}
            {{ Form::text('fecha_inicio_compra', $cliente->fecha_inicio_compra, ['class' => 'form-control' . ($errors->has('fecha_inicio_compra') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Compra']) }}
            {!! $errors->first('fecha_inicio_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('giro_dinero') }}
            {{ Form::text('giro_dinero', $cliente->giro_dinero, ['class' => 'form-control' . ($errors->has('giro_dinero') ? ' is-invalid' : ''), 'placeholder' => 'Giro Dinero']) }}
            {!! $errors->first('giro_dinero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deuda') }}
            {{ Form::text('deuda', $cliente->deuda, ['class' => 'form-control' . ($errors->has('deuda') ? ' is-invalid' : ''), 'placeholder' => 'Deuda']) }}
            {!! $errors->first('deuda', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>