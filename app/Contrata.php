<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrata extends Model
{
    protected $primaryKey = 'id_contrata';

    protected $table = 'contratam';

    public $timestamps = false;
}
