<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //convencion usar nombre del modelo sea el singular de la tabla en plurar

    protected $table = 'permiso';
    protected $fillable =['rol'];
}
