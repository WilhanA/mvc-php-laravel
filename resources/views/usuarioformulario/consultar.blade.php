@extends('layouts.app')
@section('content')
    <div class="container">
        @include('usuarioformulario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form >
                    @csrf
                    @include('usuarioformulario.__form')
                    <div class="center">
                        <a href="{{ url('/usuarioformulario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Consulta do Usuário-Formulário</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
