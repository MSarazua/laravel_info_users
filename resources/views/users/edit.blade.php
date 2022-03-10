@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-4 mt-2">
                    <a href=" {{ url('usuarios') }}" class="mt-2 btn btn-danger">
                        <b>VOLVER</b>
                    </a>
                </div>
                <div class="col-8 mt-2">
                    <form method="POST" action="{{ url('usuarios/' . $users->id) }}" enctype="multipart/form-data" onsubmit="return checkSubmit();">
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{ $users->name }}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastname" value="{{ $users->lastname }}" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="number" name="age" class="form-control" id="age" aria-describedby="age" value="{{ $users->age }}" placeholder="Edad">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="{{ $users->email }}" placeholder="Correo">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection