<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID_Cliente') }}
            {{ Form::select('ID_Cliente',$cliente, $venta->ID_Cliente, ['class' => 'form-control' . ($errors->has('ID_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('ID_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>