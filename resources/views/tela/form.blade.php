<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tela->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_metro') }}
            {{ Form::text('precio_metro', $tela->precio_metro, ['class' => 'form-control' . ($errors->has('precio_metro') ? ' is-invalid' : ''), 'placeholder' => 'Precio Metro']) }}
            {!! $errors->first('precio_metro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metraje') }}
            {{ Form::text('metraje', $tela->metraje, ['class' => 'form-control' . ($errors->has('metraje') ? ' is-invalid' : ''), 'placeholder' => 'Metraje']) }}
            {!! $errors->first('metraje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_general') }}
            {{ Form::text('precio_general', $tela->precio_general, ['class' => 'form-control' . ($errors->has('precio_general') ? ' is-invalid' : ''), 'placeholder' => 'Precio General']) }}
            {!! $errors->first('precio_general', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $tela->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_creacion') }}
            {{ Form::text('fecha_creacion', $tela->fecha_creacion, ['class' => 'form-control' . ($errors->has('fecha_creacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Creacion']) }}
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>