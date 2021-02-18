<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musico;
use Illuminate\Support\Facades\Gate;
use Auth;


class MusicosController extends Controller
{
     
 public function index(){
 	$musicos = Musico::paginate(4);
   	return view('musicos.index', ['musicos'=>$musicos]);
}

public function show (Request $request){
	$idMusico=$request->id;
	$musico=Musico::where('id_musico', $idMusico)->with('musicas')->first();
	$musico=Musico::where('id_musico', $idMusico)->with('albuns')->first();
	return view('musicos.show',  ['musico'=>$musico]);
}

public function create(){

     return view ('musicos.create');
   }

   public function store(Request $request){
      

      $novoMusico=$request->validate([
         'nome'=>['required', 'min:3', 'max:100'],
         'nacionalidade'=>['nullable', 'min:3', 'max:120'],
         'data_nascimento'=>['nullable', 'date'],
         'fotografia'=>['image', 'nullable', 'max:2000'],




      ]);   

  

      $musico=Musico::create($novoMusico);

      return redirect()->route('musicos.show', ['id'=>$musico->id_musico
   ]);
   }

   public function edit (Request $request){
   $idMusico=$request->id;

   $musico=Musico::where('id_musico',$idMusico)->first();
   if (Gate::allows('atualizar-musico', $musico) ||Gate::allows('admin')){

   return view('musicos.edit',['musico'=>$musico
]);
 }
 else{
  return redirect()->route('musicos.index')->with('mensagem','Não tem permissão para aceder á área pretendida');
 }
}


   public function update(Request $request){
   $idMusico=$request->id;
   $musico=Musico::findOrfail($idMusico);

   $atualizarMusico=$request->validate([
    'nome'=>['required', 'min:3', 'max:100'],
    'nacionalidade'=>['nullable', 'min:3', 'max:120'],
    'data_nascimento'=>['nullable', 'date'],
    'fotografia'=>['image', 'nullable', 'max:2000']
]);
   $musico->update($atualizarMusico);

  return redirect()->route('musicos.show', ['id'=>$musico->id_musico
]);
}

public function destroy (Request $request){
   $idMusico=$request->id;
   $musico=Musico::findOrFail($idMusico);

   $musico->delete();
   return redirect()->route('musicos.index')->with('mensagem','Musico eliminado');
}

public function delete(Request $request){
   $idMusico=$request->id;
   $musico=Musico::where('id_musico',$idMusico)->first();
   return view ('musicos.delete',['musico'=>$musico]);
   
}

}