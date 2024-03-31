@extends('welcome')
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    NUEVO
</button>

<div class="table-responsive">
<br>

    <table class="table table-striped table-hover table-dark">
        <thead class="">
            <tr>
                <th scope="col">ID </th>
                <th scope="col">CATEGORIAS</th>
                <th scope="col">NOMBRE</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $productos)
            <tr class="">
                <td scope="row">{{$productos->id}}</td>
                <td>{{$productos->categoria->nombre}}</td>
                <td>{{$productos->nombre}}</td>
                <td>{{$productos->cantidad}}</td>
                <td>{{$productos->precio}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{$productos->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$productos->id}}">
                    Borrar
                </button>
                </td>
            </tr>
            @include('productos.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('productos.create')

@endsection
