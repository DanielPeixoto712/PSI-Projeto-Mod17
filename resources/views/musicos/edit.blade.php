@extends('layout')
<!DOCTYPE html>
<html>
<head><br><br><br>
	<title>Formulário</title>
</head>
<body>
	<div align="center">
	<form action="{{route('musicos.update',['id'=>$musico->id_musico])}}" method="post">
@csrf
@method('patch')

Nome: <input type="text" name="nome" value="{{$musico->nome}}"><br><br>
@if($errors->has('nome'))
Deverá indicar um nome válido<br>
@endif
Nacionalidade: <input type="text" name="nacionalidade" value="{{$musico->nacionalidade}}"><br><br>
Data Nascimento <input type="date" name="data_nascimento" value="{{$musico->data_nascimento}}">
Fotografia <input type="file" name="fotografia">

<input type="submit" value="Enviar!">
</form>
</div>
</body>
</html>