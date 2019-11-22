<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use App\mascotas;
use App\mascotas_usuarios;
use App\formularioadopciones;

use Session;

class Solicitudes extends Controller
{
    public function Solicitudes(){
        $solicitudes = \DB::select("SELECT f.IdForA, f.id_usuario, f.Nombre_Completo, f.id_mascota, m.nombre_mascota, f.Edad_Familiares,
        f.Calle, f.NumInt, f.NumExt, f.Colonia, f.Delegacion, f.CP, f.Entre_Calle,
        f.Y_Calle, f.Referencias, f.Tel_Casa, f.Celular, f.Email, f.Vivienda_Mascota,
        f.Animales_Vivienda, f.Cuantos_Tiene, f.Que_Animales, f.Porque_Adopta, f.status_form
        FROM formularioadopciones AS f
        INNER JOIN mascotas AS m ON f.id_mascota= m.id_mascota
        ORDER BY f.IdForA");
        return view('Contenido.Solicitudes')->with('solicitudes', $solicitudes);
    }
    public function Aceptado(Request $request){
        $id_mascota = $request->get('id_mascota');
        $IdForA = $request->get('IdForA');
        
        $actualiza_form = \DB::select("UPDATE formularioadopciones SET status_form = 'aceptado' WHERE IdForA= '$IdForA';");
        $actualiza_m = \DB::select("UPDATE mascotas SET status_mascota = 'en espera' WHERE id_mascota= '$id_mascota';");
        $solicitudes = \DB::select("SELECT f.IdForA, f.id_usuario, f.Nombre_Completo, f.id_mascota, m.nombre_mascota, f.Edad_Familiares,
        f.Calle, f.NumInt, f.NumExt, f.Colonia, f.Delegacion, f.CP, f.Entre_Calle,
        f.Y_Calle, f.Referencias, f.Tel_Casa, f.Celular, f.Email, f.Vivienda_Mascota,
        f.Animales_Vivienda, f.Cuantos_Tiene, f.Que_Animales, f.Porque_Adopta, f.status_form
        FROM formularioadopciones AS f
        INNER JOIN mascotas AS m ON f.id_mascota= m.id_mascota
        ORDER BY f.IdForA");
                        //dd($IdForA);
        return view('Contenido.Tabla_solicitudes')->with('solicitudes', $solicitudes);
    }
    public function Rechazado(Request $request){
        $id_mascota = $request->get('id_mascota');
        $IdForA = $request->get('IdForA');

        $actualiza_form = \DB::select("UPDATE formularioadopciones SET status_form = 'rechazado' WHERE IdForA= '$IdForA';");
        $actualiza_m = \DB::select("UPDATE mascotas SET status_mascota = NULL WHERE id_mascota= '$id_mascota';");
        $solicitudes = \DB::select("SELECT f.IdForA, f.id_usuario, f.Nombre_Completo, f.id_mascota, m.nombre_mascota, f.Edad_Familiares,
        f.Calle, f.NumInt, f.NumExt, f.Colonia, f.Delegacion, f.CP, f.Entre_Calle,
        f.Y_Calle, f.Referencias, f.Tel_Casa, f.Celular, f.Email, f.Vivienda_Mascota,
        f.Animales_Vivienda, f.Cuantos_Tiene, f.Que_Animales, f.Porque_Adopta, f.status_form
        FROM formularioadopciones AS f
        INNER JOIN mascotas AS m ON f.id_mascota= m.id_mascota
        ORDER BY f.IdForA");
                        //dd($IdForA);
        return view('Contenido.Tabla_solicitudes')->with('solicitudes', $solicitudes);
    }
    public function Entregado(Request $request){
        $id_mascota = $request->get('id_mascota');
        $IdForA = $request->get('IdForA');
        $id_usuario = $request->get('id_usuario');
        //dd($id_usuario);
        $actualiza_form = \DB::select("UPDATE formularioadopciones SET status_form = 'finalizado' WHERE IdForA= '$IdForA';");
        $actualiza_m = \DB::select("UPDATE mascotas SET status_mascota = 'adoptado' WHERE id_mascota= '$id_mascota';");

        $mas_usu = new mascotas_usuarios;
        $mas_usu->id_mascota = $id_mascota;
        $mas_usu->id_usuario = $id_usuario;
        $mas_usu->save();

        $solicitudes = \DB::select("SELECT f.IdForA, f.id_usuario, f.Nombre_Completo, f.id_mascota, m.nombre_mascota, f.Edad_Familiares,
        f.Calle, f.NumInt, f.NumExt, f.Colonia, f.Delegacion, f.CP, f.Entre_Calle,
        f.Y_Calle, f.Referencias, f.Tel_Casa, f.Celular, f.Email, f.Vivienda_Mascota,
        f.Animales_Vivienda, f.Cuantos_Tiene, f.Que_Animales, f.Porque_Adopta, f.status_form
        FROM formularioadopciones AS f
        INNER JOIN mascotas AS m ON f.id_mascota= m.id_mascota
        ORDER BY f.IdForA");
                        //dd($IdForA);
        return view('Contenido.Tabla_solicitudes')->with('solicitudes', $solicitudes);
    }
    public function Mascotas(){
        $id_usuario = Session::get('sesionidu');
        $mascotas = \DB::select("SELECT m.`id_mascota`, m.`nombre_mascota`, m.`tipo_mascota`, m.`raza_mascota`, m.`cumple_mascota`,
        m.`genero`, m.`castrado`, m.`altura`, m.`peso`, m.`id_chip`, m.`archivo`, m.`status_mascota`
        FROM mascotas AS m
        INNER JOIN mascotas_usuarios AS mu ON m.`id_mascota`= mu.`id_mascota`
        INNER JOIN usuarios AS u ON mu.id_usuario= u.`id_usuario`
        WHERE u.id_usuario = '$id_usuario'
        ORDER BY m.`nombre_mascota`;");
                        //dd($IdForA);
        return view('Contenido.Mascotas')->with('mascotas', $mascotas);
    }
    
}