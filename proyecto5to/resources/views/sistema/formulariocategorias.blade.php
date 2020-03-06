@extends('plantilla')
@section('contenido')

{!! Form::open(['method' => 'POST']) !!}  
<div class='form-group'>
{!! Form::label('name', 'Categoria')!!}
{!! Form::text('name', null,['class' => 'form-control'])!!}
{!! Form::submit('Guardar') !!} 
    </div>

{!! Form::close() !!} 

@endsection