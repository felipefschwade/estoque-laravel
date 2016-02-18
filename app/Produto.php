<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'quantidade', 'descricao', 'valor', 'tamanho');
}
