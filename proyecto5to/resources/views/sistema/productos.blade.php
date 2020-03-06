    @extends('plantilla')
    @section('contenido')
    <table>
        <thead>
            <tr>
            <th>Id</th>
            <th>Marca_id</th>
            <th>Categoria_id</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            </tr>
    </thead>
    <tbody>
        <!-- Esto es un comentario -->
            @foreach ($productos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->marca_id}}</td>
                <td>{{$item->categoria_id}}</td>
                <td>{{$item->codigo}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->estado}}</td>



            </tr>
            @endforeach
    </tbody>
    </table>



    @endsection
