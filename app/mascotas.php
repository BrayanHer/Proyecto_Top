<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class mascotas extends Model
{
    use SoftDeletes;
    protected $table = 'mascotas';
    protected $primaryKey = 'id_mascota';
    protected $fillable = ['nombre_mascota','tipo_mascota','raza_mascota','cumple_mascota ','genero','castrado',
    'altura','peso','id_chip','archivo ','status_mascota'];
    
    protected $data = ['deleted_at'];
}
