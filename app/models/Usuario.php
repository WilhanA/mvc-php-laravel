<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $fillable =[
        'nome',
        'idade',
    ];

    protected $hidden = [
        'create_at',
        'update_at',
    ];

    public function usuarioformulario(){
        return $this->hasMany('App\models\UsuarioFormulario','usuario_id');
    }

    protected $table = 'usuarios';

    public function search($filter = null){
        $results = $this->where(function ($query) use($filter) {
            if($filter){
                $query ->where('nome', 'LIKE', "%{$filter}%");
            }

        })->paginate();

        
        return $results;
    }
}
