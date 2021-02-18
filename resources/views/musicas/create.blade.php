@extends('layout')
<!DOCTYPE html>
<html><br><br><br><br>
<head><div align="center">
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('musicas.store')}}" enctype="multipart/form-data" method="post">
@csrf
Titulo: <input type="text" name="titulo"><br><br>
ID Musico: <input type="text" name="id_musico"><br><br>
ID Genero: <input type="text" name="id_genero"><br><br>

<br>
<br>
<input type="submit" value="Enviar!">
</form>
</div>

@if($errors->has('titulo'))
<i>Deverá indicar um titulo correto</i>
@endif

@if($errors->has('id_musico'))
<i>Deverá indicar um Id musico correto</i>
@endif

@if($errors->has('id_genero'))
<i>Deverá indicar um Id Genero correta </i>
@endif


</body>
</html>
