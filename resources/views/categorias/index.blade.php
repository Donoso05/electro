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
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categorias)
            <tr class="">
                <td scope="row">{{$categorias->id}}</td>
                <td>{{$categorias->nombre}}</td>
                <td>{{$categorias->descripcion}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{$categorias->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categorias->id}}">
                    Borrar
                </button>
                </td>
            </tr>
            @include('categorias.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('categorias.create')

@endsection
