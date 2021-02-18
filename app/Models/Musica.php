<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;
    protected $primaryKey="id_musica";
    protected $table="musicas";


public function generos(){
    	return $this->hasMany('App\Models\Genero', 'id_genero');
    }

public function musicos(){
    	return $this->hasMany('App\Models\Musico', 'id_musico');
    }

    protected $fillable=[
    'titulo',
    'id_musico',
    'id_genero'
    

];    
}
