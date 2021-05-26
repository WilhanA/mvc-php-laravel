<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use app\http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Usuario $usuario)
    {
        $this ->repository = $usuario;
        $this ->request = $request;
    }
    //retorna a pagina de listagem de usuarios
    public function index(Request $request){
        $registros = $this->repository->paginate(10);
        return view('usuario.index', [
            'registros' => $registros,
        ]);
    }
//retorna a pagina para cadastrar um novo usuario
    public function new(){
        return view('usuario.incluir');
    }
//salvar o registro de um novo usuario
    public function create(UsuarioRequest $request){
        // aula 5: minuto7:38    return redirect()->route(usuario.listar);
        return view('usuario.index');
    }
//retorna o registro de um usuario para alteração dos dados
    public function update($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.alterar', [
            'registro' => $registro,
        ]);
    }
//retorna o registro  de um usuario para excluir do banco de dados
    public function delete($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('usuario.excluir', [
            'registro' => $registro,
        ]);
    }
//retorna o registro para consulta - ver o registro na tela
    public function view($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('usuario.consultar', [
            'registro' => $registro
        ]);
    }
//alterar o registro do usuario modificado pelo usuario - tela
    public function save(UsuarioRequest $request, $id){
        return view('usuario.listar');
    }
//excluir no banco o registro do usuario
    public function excluir($id){
        return view('usuario.listar');
    }

//cancela a operação
    public function cancel(){
        return redirect()->route('usuario.listar');
    }

    public function search(Request $request){
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('author.index', [
            'registros'=> $registros,
            'filters'=> $filters,
        ]);
    }

    public function show(Request $request, $id){
        return view('usuario.consultar');
    }


}
