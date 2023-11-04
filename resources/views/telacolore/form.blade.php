<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $telacolore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $telacolore->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_rollo') }}
            {{ Form::text('nro_rollo', $telacolore->nro_rollo, ['class' => 'form-control' . ($errors->has('nro_rollo') ? ' is-invalid' : ''), 'placeholder' => 'Nro Rollo']) }}
            {!! $errors->first('nro_rollo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $telacolore->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cinta') }}
            {{ Form::text('cinta', $telacolore->cinta, ['class' => 'form-control' . ($errors->has('cinta') ? ' is-invalid' : ''), 'placeholder' => 'Cinta']) }}
            {!! $errors->first('cinta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $telacolore->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_llegada') }}
            {{ Form::text('fecha_llegada', $telacolore->fecha_llegada, ['class' => 'form-control' . ($errors->has('fecha_llegada') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Llegada']) }}
            {!! $errors->first('fecha_llegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>