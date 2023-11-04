<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sucursal_bodega') }}
            {{ Form::text('sucursal_bodega', $preciotelasucursal->sucursal_bodega, ['class' => 'form-control' . ($errors->has('sucursal_bodega') ? ' is-invalid' : ''), 'placeholder' => 'Sucursal Bodega']) }}
            {!! $errors->first('sucursal_bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tela') }}
            {{ Form::text('tela', $preciotelasucursal->tela, ['class' => 'form-control' . ($errors->has('tela') ? ' is-invalid' : ''), 'placeholder' => 'Tela']) }}
            {!! $errors->first('tela', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_metro') }}
            {{ Form::text('precio_metro', $preciotelasucursal->precio_metro, ['class' => 'form-control' . ($errors->has('precio_metro') ? ' is-invalid' : ''), 'placeholder' => 'Precio Metro']) }}
            {!! $errors->first('precio_metro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>