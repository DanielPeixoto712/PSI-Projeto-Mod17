<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use Auth;


class GenerosController extends Controller
{
      public function index(){
 	$generos = Genero::paginate(4);
   	return view('generos.index', ['generos'=>$generos]);


}
public function show (Request $request){
	$idGenero=$request->id;
	$genero=Genero::where('id_genero', $idGenero)->with('musicas')->first();
	return view('generos.show',  ['genero'=>$genero]);
}

public function create(){

     return view ('generos.create');
   }

   public function store(Request $request){
      

      $novoGenero=$request->validate([
         'designacao'=>['required', 'min:3', 'max:100'],
         'observacoes'=>['nullable'],
      


      ]);   
      $genero=Genero::create($novoGenero);

      return redirect()->route('generos.show', ['id'=>$genero->id_genero
   ]);
   }

   public function edit (Request $request){
   $idGenero=$request->id;

   $genero=Genero::where('id_genero',$idGenero)->first();

   return view('generos.edit',['genero'=>$genero
]);
}


   public function update(Request $request){
   $idGenero=$request->id;
   $genero=Genero::findOrfail($idGenero);

   $atualizarGenero=$request->validate([
    'titulo'=>['required', 'min:3', 'max:100'],
    'id_musico'=>['nullable', 'min:1', 'max:120'],
    'id_genero'=>['nullable', 'min:1'],
   
]);
   $genero->update($atualizarGenero);

  return redirect()->route('generos.show', ['id'=>$genero->id_genero
]);
}

public function destroy (Request $request){
   $idGenero=$request->id;
   $genero=Genero::findOrFail($idGenero);

   $genero->delete();
   return redirect()->route('generos.index')->with('mensagem','Genero eliminado');
}

public function delete(Request $request){
   $idGenero=$request->id;
   $genero=Genero::where('id_genero',$idGenero)->first();
   return view ('generos.delete',['genero'=>$genero]);
   
}
}