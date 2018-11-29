<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetAlimentacao extends Model
{
    //mapeia o nome da tabela
    protected $table = 'pet_alimentacao';
    public $timestamps = false;
}
