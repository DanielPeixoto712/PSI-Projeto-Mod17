@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection

@section('conteudo')
<div align="center">
<i style="color: blue">ID:</i> <i style="color: white">{{$musico->id_musico}}</i><br>
<i style="color: blue">Nome:</i> <i style="color: white">{{$musico->nome}}</i><br>
<i style="color: blue">Nacionalidade:</i> <i style="color: white">{{$musico->nacionalidade}}</i><br>
<i style="color: blue">Data Nascimento:</i> <i style="color: white">{{$musico->data_nascimento}}</i><br>
<i style="color: blue">Fotografia:<br> {{$musico->fotografia}}
<br>

<h5 style="color: blue"><u>Musicas:</u></h5>

@foreach($musico->musicas as $musica)
<i style="color: white">{{$musica->titulo}}</i><br>
@endforeach
<br>
<h5 style="color: blue"><u>Albuns:</u></h5>
@foreach($musico->albuns as $album)
<i style="color: white">{{$album->titulo}}</i><br>
@endforeach
<hr>


@if(Gate::allows('atualizar-musico', $musico) || Gate::allows('admin'))

<a href="{{route('musicos.edit', ['id'=>$musico->id_musico])}}"><h4>Editar</h4></a>

<a href="{{route('musicos.delete', ['id'=>$musico->id_musico])}}"><h4>Eliminar</h4></a>
@endif
</div>



@section('rodape')
@endsection

