@extends('layouts.app')
@section('content')
    <div class="container">
        @include('pessoa.__apptitulo')
        <div class="tile">
            <div class="tile-body">
                <form >
                    @csrf
                    @include('pessoa.__form')
                    <div class="center">
                        <a href="{{ url('/pessoa/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Consulta do Pessoa</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
