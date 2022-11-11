<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        
        if($codigo==1234){
            $nombre = 'Raul';
            $correo = 'raul@gmail.com';
            $comentario = 'prueba de clase';
        }else{
            $nombre = null;
            $correo = null;
            $comentario = null;
        }
        return view('paginas.contacto', compact('nombre', 'correo', 'comentario'));
    }

    public function guardar(Request $request) 
    {
        //dd($request->all());

        $request->validate([
            'nombre' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'comentario' => 'required', 
        ]);   

        Contacto::create([
            $request->all()
        ]);
        
       return redirect('/contacto');
    }

    public function landingpage()
    {
            return view('paginas.landingpage');
    }

}
