<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $primaryKey = 'id_vaga';

    protected $table = 'vagas';

    protected $fillable = ['tipo_vaga', 'qtd_vaga', 'imagem'];

    public $timestamps = false;
}
