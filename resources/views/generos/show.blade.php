@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection

@section('conteudo')
<div align="center">
<i style="color: blue"> ID:</i><i style="color: white">{{$genero->id_genero}}</i><br>
<i style="color: blue"> Designacao:</i><i style="color: white">{{$genero->designacao}}</i><br>
<i style="color: blue">Observações:</i><i style="color: white">{{$genero->observacoes}}</i><br>
<br>
<h5 style="color: blue"><u>Musicas:</u></h5>

@foreach($genero->musicas as $musica)
<i style="color: white">{{$musica->titulo}}</i><br>
@endforeach
<hr>

<a href="{{route('generos.edit', ['id'=>$genero->id_genero])}}"><h4>Editar</h4></a>
<a href="{{route('generos.delete', ['id'=>$genero->id_genero])}}"><h4>Eliminar</h4></a>

</div>
@endsection

@section('galeria')
@endsection

@section('rodape')
@endsection

