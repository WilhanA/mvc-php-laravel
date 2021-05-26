<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Formulario;
use App\http\Requests\FormularioRequest;

class FormularioController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Formulario $formulario)
    {
        $this ->repository = $formulario;
        $this ->request = $request;
    }
    //retorna a pagina de listagem de formularios
    public function index(Request $request){
        $registros = $this->repository->paginate(10);
        return view('formulario.index', [
            'registros' => $registros,
        ]);
    }
//retorna a pagina para cadastrar um novo formulario
    public function new(){
        return view('formulario.incluir');
    }
//salvar o registro de um novo formulario
    public function create(FormularioRequest $request){
        // aula 5: minuto7:38    return redirect()->route(formulario.listar);
        return view('formulario.index');
    }
//retorna o registro de um formulario para alteração dos dados
    public function update($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('formulario.alterar', [
            'registro' => $registro,
        ]);
    }
//retorna o registro  de um formulario para excluir do banco de dados
    public function delete($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('formulario.excluir', [
            'registro' => $registro,
        ]);
    }
//retorna o registro para consulta - ver o registro na tela
    public function view($id){
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('formulario.consultar', [
            'registro' => $registro
        ]);
    }
//alterar o registro do formulario modificado pelo formulario - tela
    public function save(FormularioRequest $request, $id){
        return view('formulario.listar');
    }
//excluir no banco o registro do formulario
    public function excluir($id){
        return view('formulario.listar');
    }

//cancela a operação
    public function cancel(){
        return redirect()->route('formulario.listar');
    }

   /* public function search(Request $request){
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('usuario.index', [
            'registros'=> $registros,
            'filters'=> $filters,
        ]);
    }

    public function show(Request $request, $id){
        return view('formulario.consultar');
    }
*/
}
