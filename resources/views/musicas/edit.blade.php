@extends('layout')
<!DOCTYPE html>
<html>
<head><br><br><br>
	<title>Formulário</title>
</head>
<body>
	<div align="center">
	<form action="{{route('musicas.update',['id'=>$musica->id_musica])}}" method="post">
@csrf
@method('patch')

Titulo: <input type="text" name="titulo" value="{{$musica->titulo}}"><br><br>
@if($errors->has('nome'))
Deverá indicar um nome válido<br>
@endif
ID Musico: <input type="text" name="id_musico" value="{{$musica->id_musico}}"><br><br>
ID Genero: <input type="text" name="id_genero" value="{{$musica->id_genero}}">


<input type="submit" value="Enviar!">
</form>
</div>
</body>
</html>