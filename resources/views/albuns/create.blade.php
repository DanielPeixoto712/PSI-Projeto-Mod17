@extends('layout')
<!DOCTYPE html>
<html><br><br><br><br>
<head><div align="center">
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('albuns.store')}}" enctype="multipart/form-data" method="post">
@csrf
Titulo: <input type="text" name="titulo"><br><br>
ID Genero: <input type="text" name="id_genero"><br><br>
ID Musico: <input type="text" name="id_musico"><br><br>
Data Lançamento: <input type="date" name="data_lancamento"><br><br>


<br>
<br>
<input type="submit" value="Enviar!">
</form>
</div>

@if($errors->has('nome'))
<i>Deverá indicar um nome correto</i>
@endif

@if($errors->has('observacao'))
<i>Deverá indicar uma id Genero correta</i>
@endif

@if($errors->has('id_musico'))
<i>Deverá indicar uma id Musico correta</i>
@endif

@if($errors->has('data_lancamento'))
<i>Deverá indicar uma data correta</i>
@endif




</body>
</html>

