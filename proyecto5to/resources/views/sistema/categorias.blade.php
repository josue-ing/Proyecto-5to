@extends('plantilla')
@section('contenido')
<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        </tr>
</thead>
<tbody>
    <!-- Esto es un comentario -->
        @foreach ($categorias as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->categoria}}</td>
            <td>{{$item->descripcion}}</td>


        </tr>
        @endforeach
</tbody>
</table>
@endsection

