@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning"><b><b>{{ __('Menú') }}</b></b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row" style="margin-left: 30%">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <a href="{{ url('usuarios') }}"><img style="margin-left: 10%"
                                        src="{{ asset('img/leader.png') }}" width="75%" height="100%" alt="Sap"></a><br>
                                <a href="{{ url('usuarios') }}">Ver usuarios</a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <a href="{{ url('log/usuarios') }}"><img style="margin-left: 10%"
                                        src="{{ asset('img/login.png') }}" width="75%" height="100%" alt="Sap"></a><br>
                                <a href="{{ url('log/usuarios') }}">Sesión de usuarios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
