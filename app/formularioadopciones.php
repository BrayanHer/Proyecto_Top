<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class formularioadopciones extends Model
{
    use SoftDeletes;
    protected $table = 'formularioadopciones';
    protected $primaryKey = 'IdForA';
    protected $fillable = ['formularioadopciones'.'IdForA','Nombre_Completo','IdMas','Edad_Familiares' ,'Calle','NumInt','NumExt','Colonia','Delegacion','CP','Entre_Calle','Y_Calle','Referencia','Tel_Casa','Celular' ,'Email' ,'Vivienda_Mascota','Animales_Vivienda','Cuantos_Tiene','Que_Animales','Porque_Adopta'];
    
    protected $data = ['deleted_at'];
}
