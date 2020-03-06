@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Marcas</h3>
                </div>
                <div class="card-body">
                
                {{ Form::open(['route' =>['marcas.store']]) }}  
                @include('sistema.marcas.parciales.formulario')
                {{ Form::close() }} 
                
                
                
                </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
