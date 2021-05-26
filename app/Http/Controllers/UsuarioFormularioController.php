<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\UsuarioFormulario;
use App\models\Formulario;
use App\models\Usuario;
use App\http\Requests\UsuarioFormularioRequest;

class UsuarioFormularioController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, UsuarioFormulario $usuarioformulario)
    {
        $this ->repository = $usuarioformulario;
        $this ->request = $request;
    }
    //retorna a pagina de listagem de usuarioformularios
    public function index(Request $request){
        $registros = $this->repository->paginate(10);
        return view('usuarioformulario.index', [
            'registros' => $registros,
        ]);
    }
//retorna a pagina para cadastrar um novo usuarioformulario
    public function new(){
        $formularios = Formulario::all();
        $usuarios = Usuario::all();
        return view('usuarioformulario.incluir',[
            'formularios'=>$formularios,
            'usuarios'=>$usuarios,
        ]);
    }
//salvar o registro de um novo usuarioformulario
    public function create(UsuarioFormularioRequest $request){
        // aula 5: minuto7:38    return redirect()->route(formulario.listar);
        return view('usuarioformulario.index');
    }
//retorna o registro de um usuarioformulario para alteração dos dados
    public function update($id){
        $formularios = Formulario::all();
        $usuarios = Usuario::all();
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuarioformulario.alterar', [
            'registro' => $registro,
            'formularios'=>$formularios,
            'usuarios'=>$usuarios,
        ]);
    }
//retorna o registro  de um usuarioformulario para excluir do banco de dados
    public function delete($id){
        $formularios = Formulario::all();
        $usuarios = Usuario::all();
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('usuarioformulario.excluir', [
            'registro' => $registro,
            'formularios'=>$formularios,
            'usuarios'=>$usuarios,
        ]);
    }
//retorna o registro para consulta - ver o registro na tela
    public function view($id){
        $formularios = Formulario::all();
        $usuarios = Usuario::all();
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('usuarioformulario.consultar', [
            'registro' => $registro,
            'formularios'=>$formularios,
            'usuarios'=>$usuarios,
        ]);
    }
//alterar o registro do usuarioformulario modificado pelo usuarioformulario - tela
    public function save(UsuarioFormularioRequest $request, $id){
        return view('usuarioformulario.listar');
    }
//excluir no banco o registro do usuarioformulario
    public function excluir($id){
        return view('usuarioformulario.listar');
    }

//cancela a operação
    public function cancel(){
        return redirect()->route('usuarioformulario.listar');
    }

    
    /* .:::FUNÇÕES QUE ESTAVAM NAS AULAS DE 2020 (NÃO SEI SE SÃO NECESSARIAS):::. 


    public function search(Request $request){
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('usuario.index', [
            'registros'=> $registros,
            'filters'=> $filters,
        ]);
    }

    public function show(Request $request, $id){
        return view('usuarioformulario.consultar');
    }*/

}
