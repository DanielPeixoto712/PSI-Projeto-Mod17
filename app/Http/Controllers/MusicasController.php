<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;
use App\Models\Genero;
use Illuminate\Support\Facades\Gate;
use Auth;


class MusicasController extends Controller
{
       public function index(){
 	$musicas = Musica::paginate(12);
   	return view('musicas.index', ['musicas'=>$musicas]);
}

public function show (Request $request){
	$idMusica=$request->id;
	$musica=Musica::where('id_musica',$idMusica)->with('generos')->first();
	$musica=Musica::where('id_musica',$idMusica)->with('musicos')->first();

	return view('musicas.show',  ['musica'=>$musica]);
}
public function create(){

     return view ('musicas.create');
   }

   public function store(Request $request){
      

      $novoMusica=$request->validate([
         'titulo'=>['required', 'min:3', 'max:100'],
         'id_musico'=>['nullable'],
         'id_genero'=>['nullable'],


      ]);   
      $musica=Musica::create($novoMusica);

      return redirect()->route('musicas.show', ['id'=>$musica->id_musica
   ]);
   }

   public function edit (Request $request){
   $idMusica=$request->id;

   $musica=Musica::where('id_musica',$idMusica)->first();
   if (Gate::allows('atualizar-musica', $musica) ||Gate::allows('admin')){
    

   return view('musicas.edit',['musica'=>$musica
]);

  }
  else{
    return redirect()->route('musicas.index')->with('mensagem','Não tem permissão para aceder á área pretendida');
  }
}


   public function update(Request $request){
   $idMusica=$request->id;
   $musica=Musica::findOrfail($idMusica);

   $atualizarMusica=$request->validate([
    'titulo'=>['required', 'min:3', 'max:100'],
    'id_musico'=>['nullable', 'min:1', 'max:120'],
    'id_genero'=>['nullable', 'min:1'],
   
]);
   $musica->update($atualizarMusica);

  return redirect()->route('musicas.show', ['id'=>$musica->id_musica
]);
}

public function destroy (Request $request){
   $idMusica=$request->id;
   $musica=Musica::findOrFail($idMusica);

   $musica->delete();
   return redirect()->route('musicas.index')->with('mensagem','Musica eliminado');
}

public function delete(Request $request){
   $idMusica=$request->id;
   $musica=Musica::where('id_musica',$idMusica)->first();
   return view ('musicas.delete',['musica'=>$musica]);
   
}
}
