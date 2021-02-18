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
@foreach($generos as $genero)
<h3>
<a class="btn btn-primary" role="button" href="{{route('generos.show', ['id'=>$genero->id_genero])}}">
{{$genero->designacao}}</a></h3>
@endforeach
</ul>
{{$generos->render()}}
<a href="{{route('generos.create', ['id'=>$genero->id_genero])}}"><h4>Criar</h4></a>
</div>




@endsection

@section('galeria')
@endsection


@section('rodape')
@endsection


