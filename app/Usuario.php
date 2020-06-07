<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'id_usuario';

    protected $table = 'usuarios';

    protected $fillable = ['perfil_github','nome','email','tecnologias'];

    public $timestamps = false;
}
