@extends('layouts.app')
@section('content')
    <div class="container">
        @include('formulario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('/formulario/excluir', $registro->id) }}" method="POST">
                    @csrf
                    @include('formulario.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Excluir Dados do Formulário
                        </button>
                        <a href="{{ url('/formulario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Exclusão do Formulário</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
