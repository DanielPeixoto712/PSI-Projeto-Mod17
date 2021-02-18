<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;


class AlbunsController extends Controller
{
     
 public function index(){
 	$albuns = Album::paginate(4);
   	return view('albuns.index', ['albuns'=>$albuns]);

}

public function show (Request $request){
	$idAlbum=$request->id;
	$album=Album::where('id_album', $idAlbum)->with('musicas')->first();
	return view('albuns.show',  ['album'=>$album]);
}

public function create(){

     return view ('albuns.create');
   }

   public function store(Request $request){
      

      $novoAlbum=$request->validate([
         'titulo'=>['required', 'min:3', 'max:100'],
         'id_genero'=>['min:1', 'max:100'],
         'id_musico'=>['min:1', 'max:100'],
         'data_lancamento'=>['date'],

      ]);   
      $album=Album::create($novoAlbum);

      return redirect()->route('albuns.show', ['id'=>$album->id_album
   ]);
   }

    public function edit (Request $request){
   $idAlbum=$request->id;

   $album=Album::where('id_album',$idAlbum)->first();

   return view('albuns.edit',['album'=>$album
]);
}


   public function update(Request $request){
   $idAlbum=$request->id;
   $album=Album::findOrfail($idAlbum);

   $atualizarAlbum=$request->validate([
    'titulo'=>['required', 'min:3', 'max:100'],
    'id_musico'=>['nullable', 'min:1', 'max:120'],
    'id_genero'=>['nullable', 'min:1'],
   
]);
   $album->update($atualizarAlbum);

  return redirect()->route('albuns.show', ['id'=>$album->id_album
]);
}

public function destroy (Request $request){
   $idAlbum=$request->id;
   $album=Album::findOrFail($idAlbum);

   $album->delete();
   return redirect()->route('albuns.index')->with('mensagem','Album eliminado');
}

public function delete(Request $request){
   $idAlbum=$request->id;
   $album=Album::where('id_album',$idAlbum)->first();
   return view ('albuns.delete',['album'=>$album]);
  
}
}
