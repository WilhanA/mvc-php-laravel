@extends('layouts.app')
@section('content')
    <div class="container">
        @include('formulario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form >
                    @csrf
                    @include('formulario.__form')
                    <div class="center">
                        <a href="{{ url('/formulario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Consulta do Formulário</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
