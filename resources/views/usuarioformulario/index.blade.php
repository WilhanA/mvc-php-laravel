@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Lista de UsuarioFormulario</i>
            </h1>
            <ul class="app-breadcrumb creadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Menu principal</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="tile">
            <div class="tile-body">
                <form class="form form-inline" action="{{ url('search_usuario') }}" method="POST">
                    @csrf
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label col-sm-1">Nome:</label> <input type="text"
                                class="form-control col-sm-9" id="nome" name="nome"
                                placeholder="Digite um nome para pesquisar" value="{{ $filters['nome'] ?? '' }}" />
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">
                                    Pesquisar <i class="fa fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tile">
            <div class="tile-body">
                <div id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover cf">
                        <thead class="cf">
                            <tr>
                                {{-- <th>Foto</th> --}}
                                <th style="font-weight: bold; text-align: center;">usuario_id</th>
                                <th style="font-weight: bold; text-align: center;">formulario_id</th>
                                <th style="font-weight: bold; text-align: center;">Respondido</th>
                                <th style="font-weight: bold; text-align: center;">usuario</th>
                                <th style="font-weight: bold; text-align: center;">formulario</th>
                            </tr>
                        </thead>
                        <tbody>

 
                            @foreach($registros as $registro)
                            <tr>
                            <td>
                                <img src="{{url('/imagem', $registro->profile_pic) }}" />
                            </td>
                            {{-- <td data-title="Foto"  style="text-align: center" >{{$registro->foto }}</td> --}}
                            <td data-title="usuario_id"  style="text-align: center" >{{$registro->usuario_id }}</td>
                            <td data-title="formulario_id"  style="text-align: center" >{{$registro->formulario_id }}</td>
                            <td data-title="usuario"  style="text-align: center" >{{$registro->usuario }}</td>
                            <td data-title="formulario"  style="text-align: center" >{{$registro->formulario }}</td>
                            <td data-title="respondido"  style="text-align: center" >{{$registro->respondido }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ url('/usuario/alterar', $registro->id) }}"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ url('/usuario/excluir', $registro->id) }}"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-warning btn-sm" href="{{ url('/usuario/consultar', $registro->id) }}"><i class="fa fa-address-book"></i></a>
                            </td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                   {{--  @if(@isset($filters))
                        {{$registros->appends($filters)->links()}}
                    @else
                        {{$registros->links()}}  
                    @endisset ERRO NO CLIENTE/LISTAR--}}
                    <a class="btn btn-success btn-lg" href="{{ url('/usuario/cadastrar')}}"><i class="fa fa-circle"></i></a>
                </div>
            </div>
        </div>
    </div>


@endsection