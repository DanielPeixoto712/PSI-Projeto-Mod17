@extends('layout')
<!DOCTYPE html>
<html>
<head><br><br><br>
	<title>Formulário</title>
</head>
<body>
	<div align="center">
	<form action="{{route('generos.update',['id'=>$genero->id_genero])}}" method="post">
@csrf
@method('patch')


Designação: <input type="text" name="designacao" value="{{$genero->designacao}}"><br><br>
Observações: <input type="text" name="observacoes" value="{{$genero->observacoes}}">


<input type="submit" value="Enviar!">
</form>
</div>
</body>
</html>