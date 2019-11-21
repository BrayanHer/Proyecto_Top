<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class mascotas extends Model
{
    use SoftDeletes;
    protected $table = 'mascotas';
    protected $primaryKey = 'IdMas';
    protected $fillable = ['mascotas','IdMas','Nombre','Edad ','Especie','Raza'];
    
    protected $data = ['deleted_at'];
}
