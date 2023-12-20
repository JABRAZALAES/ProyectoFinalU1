<div class="box box-info padding-1">
    <div class="box-body">


    <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id',$cliente,$producto->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Producto') }}
            {{ Form::text('Nombre', $producto->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('Descripcion', $producto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>