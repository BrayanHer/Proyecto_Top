<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class vistas extends Controller
{
    public function Inicio(){
        return view('index');
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
