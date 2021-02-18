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
@foreach($musicos as $musico)
<h3>
<a class="btn btn-primary" role="button" href="{{route('musicos.show', ['id'=>$musico->id_musico])}}">
{{$musico->nome}}</a></h3>

@endforeach
</ul>
{{$musicos->render()}}
<a href="{{route('musicos.create', ['id'=>$musico->id_musico])}}"><h4>Criar</h4></a>
</div>

@endsection

@section('galeria')
@endsection

@section('rodape')
@endsection

