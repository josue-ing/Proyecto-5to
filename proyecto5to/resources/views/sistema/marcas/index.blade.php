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
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Esto es un comentario -->
                            @foreach ($marcas as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->marca}}</td>
                                <td><a href={{route('marcas.edit',$item->id)}} class="btn xs btn-info"> Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
