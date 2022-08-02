<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $ticket->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('info_empresa') }}
            {{ Form::text('info_empresa', $ticket->info_empresa, ['class' => 'form-control' . ($errors->has('info_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Info Empresa']) }}
            {!! $errors->first('info_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pedido') }}
            {{ Form::text('pedido', $ticket->pedido, ['class' => 'form-control' . ($errors->has('pedido') ? ' is-invalid' : ''), 'placeholder' => 'Pedido']) }}
            {!! $errors->first('pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>