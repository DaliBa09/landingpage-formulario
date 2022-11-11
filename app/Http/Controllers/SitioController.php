<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function actualizacion($lleno=null){
        if(!empty($lleno)){
            $persona = 'Gabriel Mesa Gutierrez';
            $correo = 'gabito123@gmail.com';
        } else{
            $persona="";
            $correo='';
        }
    
        return view('contacto', compact('persona', 'lleno', 'correo'));
    }

    public function landin(){
        return view('landingpage');
    }
}
