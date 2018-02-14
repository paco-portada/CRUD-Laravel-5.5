<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fruta;
use App\Http\Requests\StoreFrutasRequest;
use App\Http\Requests\UpdateFrutasRequest;

class FrutasController extends Controller
{

     public function create()
    {
         //devuelve la vista para registrar a una fruta
         return view('frutas.create', compact('fruta'));
      
    }

      public function store(StoreFrutasRequest $request)
    {
          //request que registra a un fruta
          Fruta::create($request->all());
          //Se redirecciona al index de frutas 
          return redirect()->route('frutas.index');
    }
     
   

    public function index()
    {
      //mostrar todas las frutas 
    	$frutas =  Fruta::all();

    	return view('frutas.index', ['frutas' => $frutas]);

    }


     public function edit($id)
    {
        ///busca la fruta con ese id
        $fruta = Fruta::findOrFail($id);        
        //devuelve la vista para editar a una fruta
        return view('frutas.edit', compact('fruta'));
    }


    public function update(Request $request,$id)
    {
      //actualiza la fruta en la BD 
      //
    	$fruta = Fruta::findOrFail($id);

    	$fruta -> nombre = $request -> nombre;

    	$fruta -> save();

    	 //redirecciona al index de frutas
        return redirect()->route('frutas.index');
    }


       public function destroy($id)
    {
        //busca a la fruta con ese id
        $fruta = Fruta::findOrFail($id);

        //borra a dicha fruta
        $fruta->delete();

        //redirecciona al index de frutas
        return redirect()->route('frutas.index');
    }


}
