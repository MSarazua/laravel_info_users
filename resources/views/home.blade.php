@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menú') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('usuarios') }}">Ver usuarios</a>
                    <a href="{{ url('log/usuarios') }}">Sesión de usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
