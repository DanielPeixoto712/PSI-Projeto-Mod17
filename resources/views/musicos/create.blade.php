@extends('layout')
<!DOCTYPE html>
<html><br><br><br><br>
<head><div align="center">
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('musicos.store')}}" enctype="multipart/form-data" method="post">

@csrf
Nome: <input type="text" name="nome"><br><br>
Nacionalidade: <input type="text" name="nacionalidade"><br><br>
Data de Nascimento: <input type="date" name="data_nascimento"><br><br>
Fotografia: <input type="file" name="fotografia"><br><br>
@if($errors->has('fotografia'))
Verifique se introduziu o nome corretamente.<br>
@endif

<br>
<br>
<input type="submit" value="Enviar!">
</form>
</div>





@if($errors->has('nome'))
<i>Deverá indicar um nome correto</i>
@endif

@if($errors->has('nacionalidade'))
<i>Deverá indicar uma nacionalidade correta</i>
@endif

@if($errors->has('data_nascimento'))
<i>Deverá indicar uma data de nascimento correta </i>
@endif


</body>
</html>

