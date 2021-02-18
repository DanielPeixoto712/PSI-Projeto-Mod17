<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $primaryKey="id_album";
    protected $table="albuns";

public function musicas(){
    	return $this->hasMany('App\Models\Musica', 'id_album');
    }
    protected $fillable=[
    'titulo',
    'id_genero'	,
    'id_musico',
    'data_lancamento'
    

];  


}
