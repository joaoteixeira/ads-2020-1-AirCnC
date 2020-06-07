<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'id_empresa';

    protected $table = 'empresas';

    protected $fillable = ['nome','email','tecnologias','tipo_vaga','quant_vaga'];

    public $timestamps = false;
}
