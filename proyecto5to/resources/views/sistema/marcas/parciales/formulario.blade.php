<div class="form-group col-md-12">
<strong>
{{ Form::label('marca','Marcas', ['class'=>'']) }} 
</strong> 
{{ Form::text('marca',null, 
    ['class'=>'form-control', 'placeholder'=>'Ingrese una Marca..']) }}
</div>
{{ Form::submit('Guardar', ['class'=>'btn btn-info'])  }}