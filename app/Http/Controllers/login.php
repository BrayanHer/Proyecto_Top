<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use Session;

class login extends Controller
{
    public function In()
    {
        return view('Log');
    }
    public function iniciasesion(Request $request){

        $usuario  = $request->usuario;
        $passw    = $request->Password;

        $consulta = usuarios::withTrashed()->where('email_usuario','=',$usuario)
                        ->where ('pass_usuario','=',$passw)
                       ->get();
    

          if(count($consulta)==0){
           Session::flash('error', 'El usuario no existe o su clave confidencial no es correcta');
              return redirect()->route('Inicio');
          }
          else{
           $desactivado = $consulta[0]->deleted_at;
              if ($desactivado!=""){
               Session::flash('error', 'El usuario esta deshabilitado pase con su administrador');
                  return redirect()->route('Inicio');
              }
              else{
                
               Session::put('sesionname',$consulta[0]->nom_usuario);
               Session::put('sesionidu',$consulta[0]->id_usuario);
               Session::put('sesionpass',$consulta[0]->pass_usuario);
               Session::put('sesionuser',$consulta[0]->email_usuario);
               Session::put('sesiontipouser',$consulta[0]->tipo_usuario);
               
         
               $sname = Session::get('sesionname');
               $sidu = Session::get('sesionidu');
               $stipo = Session::get('sesionpass');
               $suser=Session::get('sesionuser');
  
       return redirect()->route('Inicio');
  
              }
          }
        }  
       
              
          public function principal(){
            if( Session::get('sesionidu')!=""){
               return view ('Inicio');
            }
              
              else{
                Session::flash('error', 'Favor de loguearse antes de continuar');
                   return redirect()->route('In');
               }
             }
             
  
           public function cerrarsesion(){
            Session::forget('sesionname');
            Session::forget('sesionidu');
            Session::forget('sesionpass');
            Session::forget('sesionuser');
            Session::forget('sesiontipouser');
            Session::flush();
            Session::flash('error', 'Sesión Cerrada Correctamente');
            return redirect()->route('Inicio');
           }   
}
