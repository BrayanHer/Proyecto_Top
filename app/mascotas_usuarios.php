<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class mascotas_usuarios extends Model
{
    protected $table = 'mascotas_usuarios';
    protected $primaryKey = 'id_mascotasusu';
    protected $fillable = ['id_mascota','id_usuario'];
    
}
