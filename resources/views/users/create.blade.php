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
                    <form method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data" onsubmit="return checkSubmit();">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="number" name="age" class="form-control" id="age" aria-describedby="age" placeholder="Edad">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection