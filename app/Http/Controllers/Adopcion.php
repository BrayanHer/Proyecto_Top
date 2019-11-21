<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use App\mascotas;
use App\formularioadopciones;

use Session;

class Adopcion extends Controller
{
    public function Adoptar(){
$clavequesigueM = usuarios::withTrashed()->orderBy('idu', 'desc')
    ->take(1)
        ->get();
    if(count($clavequesigueM)==0){
        $IdUs = 1;
        }
    else{
        $IdUs = $clavequesigueM[0]->idu + 1;
        }

        $Mascotas=mascotas::withTrashed()->orderBy('IdMas', 'asc')
        ->get();  
    
        return view('Contenido.Adopcion')
        ->with('Mascotas',$Mascotas);
    }
    public function F_Adoptar(){
        $clavequesigueM = usuarios::withTrashed()->orderBy('idu', 'desc')
            ->take(1)
                ->get();
            if(count($clavequesigueM)==0){
                $IdUs = 1;
                }
            else{
                $IdUs = $clavequesigueM[0]->idu + 1;
                }
        
                $Mascotas=mascotas::withTrashed()->orderBy('IdMas', 'asc')
                ->get();  
            
                return view('Contenido.Form')
                ->with('Mascotas',$Mascotas);
            }

        public function G_Adopcion(Request $request){
            $nombre=$request->nombre;
            $Madopcion=$request->Madopcion;
            $edades=$request->edades;
            $calle=$request->calle;
            $n_exterior=$request->n_exterior;
            $n_interior=$request->n_interior;
            $colonia=$request->colonia;
            $Delegación=$request->Delegación;
            $cp=$request->cp;
            $calle1=$request->calle1;
            $calle2=$request->calle2;
            $referencias=$request->referencias;
            $tel_casa=$request->tel_casa;
            $celular=$request->celular;
            $email=$request->email;
            $donde_mascota=$request->donde_mascota;
            $animales=$request->animales;
            $cuantos=$request->cuantos;
            $porque=$request->porque;
       
           
            $Mast=new formularioadopciones;
            $Mast->Nombre_Completo=$request->nombre;
            $Mast->IdMas=$request->Madopcion;
            $Mast->Edad_Familiares=$request->edades;
            $Mast->Calle=$request->calle;
            $Mast->NumInt=$request->n_exterior;
            $Mast->NumExt=$request->n_interior;
            $Mast->Colonia=$request->colonia;
            $Mast->Delegacion=$request->Delegación;
            $Mast->CP=$request->cp;
            $Mast->Entre_Calle=$request->calle1;
            $Mast->Y_Calle=$request->calle2;
            $Mast->Referencias=$request->referencias;
            $Mast->Tel_Casa=$request->tel_casa;
            $Mast->Celular=$request->celular;
            $Mast->Email=$request->email;
            $Mast->Vivienda_Mascota=$request->donde_mascota;
            $Mast->Animales_Vivienda=$request->animales;
            $Mast->Cuantos_Tiene=$request->cuantos;
            $Mast->Que_Animales='Ninguno';
            $Mast->Porque_Adopta=$request->porque;
            $Mast->save();

            

            return redirect()->back();
        }

}
