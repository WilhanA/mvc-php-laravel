@extends('layouts.app')
@section('content')
    <div class="container">
        @include('usuarioformulario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('/usuarioformulario/update') }}" method="POST">
                    @csrf
                    @include('usuarioformulario.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Salvar Dados do Usuário-Formulário
                        </button>
                        <a href="{{ url('/usuarioformulario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Alteração do Usuário-Formulário</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
