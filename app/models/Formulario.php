<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable =[
        'nome',
    ];

    public function usuarioformulario(){
        return $this->hasMany('App\models\UsuarioFormulario','formulario_id');
    }

}
