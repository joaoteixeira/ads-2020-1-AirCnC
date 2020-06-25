<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'id_empresa';

    protected $table = 'empresas';

    protected $fillable = ['nome', 'email', 'tecnologias'];

    public $timestamps = false;
}
