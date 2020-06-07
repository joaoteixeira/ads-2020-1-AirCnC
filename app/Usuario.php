<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'id_usuario';

    protected $table = 'usuarios';

    public $timestamps = false;
}
