<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mascotas;
use Session;

class vistas extends Controller
{
    public function Inicio(){
        $mascotas = mascotas::withTrashed()
                        ->orderBy('created_at', 'asc')
                        ->get();
        
        return view('Contenido.Inicio')->with('mascotas', $mascotas);
    }
    public function Entrada(){
        return view('Log');
    }
    public function Adopcion(){
        return view('Contenido.Adopcion');
    }
    public function Seccion(){
        return view('Contenido.Seccion');
    }
    public function Requisitos(){
        return view('Contenido.Requisitos');
    }
}
