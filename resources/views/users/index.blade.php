@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('mensaje') }}</strong>
</div>
@endif
@if (session('datosEliminados'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('datosEliminados') }}</strong>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-4 mt-2">
                    <a href=" {{ url('usuarios/create') }}" class="mt-2 btn btn-success">
                        <b>+ AGREGAR USUARIO</b>
                    </a>
                </div>
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $item)
                        <tr>
                            <th>{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->lastname }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="center">
                                <div style="margin-top:5px;margin-bottom:5px">
                                    <a href="{{ url('usuarios/' . $item->id . '/edit') }}" class="btn-edit" title="Editar">
                                        <i class="fas fa-edit icon-action-btn"></i>
                                    </a>
                                    <a class="btn-delete rounded-circle" title="Eliminar {{ $item->name }}" onclick="event.preventDefault();                                                                                                                                                                    document.getElementById('formDel{{ $item->id }}').submit();">
                                        <span class="text-light"><i class="fas fa-trash-alt"></i></span>
                                    </a>
                                    <form id="formDel{{ $item->id }}" action="{{ url('usuarios/' . $item->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection