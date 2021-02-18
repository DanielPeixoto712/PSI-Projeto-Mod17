@extends('layout')
@section('titulo-pagina')
@endsection

@section('navbar')
@endsection

@section('menupr')
@endsection

@section('conteudo')

<div align="center">
<ul>
@foreach($musicas as $musica)
<h3>
<a class="btn btn-primary" role="button" href="{{route('musicas.show', ['id'=>$musica->id_musica])}}">
	{{$musica->titulo}}</a></h3>
@endforeach
</ul>
{{$musicas->render()}}
<a href="{{route('musicas.create', ['id'=>$musica->id_musica])}}"><h4>Criar</h4></a>
</div>

@endsection


@section('galeria')
@endsection

@section('rodape')
@endsection
