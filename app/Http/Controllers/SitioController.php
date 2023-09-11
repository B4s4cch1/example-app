<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    //mostrar formulario
    public function contactoForm($tipo=null)    {
        return view('contacto')->with(['tipo' => $tipo]);
    //dd($tipo);
    //return view('contacto',compact('tipo'));
    }

    //recibir formulario
    public function contactoSave(Request $request)    {
    $request->validate([
        'name'=>'required|min:5',
        'mail'=>'required|email',
        'comment'=>'required|min:5',
    ]);
    //
    $contacto = new Contacto();
    $contacto->name= $request->name;
    $contacto->mail =$request->mail;
    //
    $contacto->comment=$request->comment;
    $contacto->save();

    return redirect('/contacto');
    }

}
