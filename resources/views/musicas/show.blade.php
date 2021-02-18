@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection

@section('conteudo')
<div align="center">
<i style="color: blue">ID:</i>  <i style="color: white">{{$musica->id_musica}}</i><br>
<i style="color: blue">Titulo:</i>  <i style="color: white">{{$musica->titulo}}</i><br>
<i style="color: blue">ID Musico:</i>  <i style="color: white">{{$musica->id_musico}}</i><br>
<i style="color: blue">ID Genero:</i>  <i style="color: white">{{$musica->id_genero}}</i><br>

<br>
<h5 style="color: blue"><u>Genero:</u></h5>

@foreach($musica->generos as $genero)
<i style="color: white">{{$genero->designacao}}</i>
@endforeach



<br>
<h5 style="color: blue"><u>Musico:</u></h5>

@foreach($musica->musicos as $musico)
<i style="color: white">{{$musico->nome}}</i>
@endforeach
<hr>

@if(Gate::allows('atualizar-musica', $musica) || Gate::allows('admin'))
<a href="{{route('musicas.edit', ['id'=>$musica->id_musica])}}"><h4>Editar</h4></a>
<a href="{{route('musicas.delete', ['id'=>$musica->id_musica])}}"><h4>Eliminar</h4></a>
@endif

</div>
@endsection

@section('galeria')
@endsection

@section('rodape')
@endsection


