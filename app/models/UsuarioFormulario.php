<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UsuarioFormulario extends Model
{
    protected $fillable = [
        'usuario_id', 'formulario_id', 'respondido', 'usuario', 'formulario',
    ];

    public function usuario(){
        return $this->belongsTo('App\models\Usuario','usuario_id');
    }

    public function formulario(){
        return $this->belongsTo('App\models\Formulario','formulario_id');
    }
}
