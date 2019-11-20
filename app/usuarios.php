<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use SoftDeletes;
    protected $table = 'usuarios';
    protected $primaryKey = 'idu';
    protected $fillable = ['usuarios','idu','nombre','contraseña','tipo','usuario'];
    
    protected $data = ['deleted_at'];
  
}