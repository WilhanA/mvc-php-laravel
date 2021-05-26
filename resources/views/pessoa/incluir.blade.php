@extends('layouts.app')
@section('content')
    <div class="container">
        @include('pessoa.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form action="{{ url('/pessoa/salvar') }}" method="POST">
                    @csrf
                    @include('pessoa.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Salvar Dados do Pessoa
                        </button>
                        <a href="{{ url('/pessoa/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Inscrição do Pessoa</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
