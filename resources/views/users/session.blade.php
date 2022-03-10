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
                            <th scope="col">No.</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Ingreso desde</th>
                            <th scope="col">Dirección IP</th>
                            <th scope="col">Hora y fecha de inicio</th>
                            <th scope="col">Hora y fecha de salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            @if ($item->authentications)
                                @foreach ($item->authentications as $record)
                                <tr class="gradeX">
                                    <td>{{ $record->id }}</td>
                                    <td>{{ $item->name }} {{ $item->lastname }}</td>
                                    <td>{{ $record->user_agent }}</td>
                                    <td>{{ $record->ip_address }}</td>
                                    <td>{{ $record->login_at }}</td>
                                    <td>{{ $record->logout_at }}</td>
                                </tr>
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection