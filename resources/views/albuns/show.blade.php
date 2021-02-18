@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection

@section('conteudo')

<div align="center">

<i style="color: blue">ID: </i> <i style="color: white">{{$album->id_album}}</i><br>
<i style="color: blue">Titulo: </i> <i style="color: white">{{$album->titulo}}</i><br>
<i style="color: blue">ID Genero: </i> <i style="color: white">{{$album->id_genero}}</i><br>
<i style="color: blue">ID Musico: </i> <i style="color: white">{{$album->id_musico}}</i><br>
<i style="color: blue">Data lançamento: </i> <i style="color: white">{{$album->data_lancamento}}</i><br>
<i style="color: blue">Observacoes: </i> <i style="color: white">{{$album->observacoes}}</i><br>
<br>

<h5 style="color: blue"><u>Musicas:</u></h5>

@foreach($album->musicas as $musica)
<i style="color: white">{{$musica->titulo}}</i>
@endforeach
<hr>
@if((auth()->check())
<a href="{{route('albuns.edit', ['id'=>$album->id_album])}}"><h4>Editar</h4></a>
<a href="{{route('albuns.delete', ['id'=>$album->id_album])}}"><h4>Eliminar</h4></a>
@endif
</div>

@endsection

@section('rodape')
@endsection