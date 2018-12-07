<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'nome', 'login', 'senha', 'grupo_usuario_id', 'parentesco'
    ];

}
