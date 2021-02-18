@extends('layout')
<!DOCTYPE html>
<html>
<head><br><br><br>
	<title>Formulário</title>
</head>
<body>
	<div align="center">
	<form action="{{route('albuns.update',['id'=>$álbum->id_album])}}" method="post">
@csrf
@method('patch')

Titulo: <input type="text" name="titulo" value=""><br><br>
@if($errors->has('nome'))
Deverá indicar um nome válido<br>
@endif
ID Genero: <input type="text" name="id_genero" value=""><br><br>
ID Musico: <input type="text" name="id_musico">
Data Lançamento: <input type="text" name="data_lancamento">

<input type="submit" value="Enviar!">
</form>
</div>
</body>
</html>