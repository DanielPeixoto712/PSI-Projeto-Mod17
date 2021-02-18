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
@foreach($albuns as $album)
<h3>
<a class="btn btn-primary" role="button" href="{{route('albuns.show', ['id'=>$album->id_album])}}">
	{{$album->titulo}}</a></h3>
@endforeach
</ul>
{{$albuns->render()}}
<a href="{{route('albuns.create', ['id'=>$album->id_album])}}"><h4>Criar</h4></a>
</div>

@endsection

@section('rodape')
@endsection
