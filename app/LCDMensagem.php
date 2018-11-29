<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LCDMensagem extends Model
{
    //mapeia o nome da tabela
    protected $table = 'lcd_mensagem';
    public $timestamps = false;
}
