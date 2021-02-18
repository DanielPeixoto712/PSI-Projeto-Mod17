@extends('layout')
<!DOCTYPE html>
<html><br><br><br><br>
<head><div align="center">
	<title>Formulário</title>
</head>
<body>
	<form action="{{route('generos.store')}}" enctype="multipart/form-data" method="post">
@csrf
Designação: <input type="text" name="designacao"><br><br>
Observações: <input type="text" name="observacoes"><br><br>


<br>
<br>
<input type="submit" value="Enviar!">
</form>
</div>

@if($errors->has('designacao'))
<i>Deverá indicar uma Designação correta</i>
@endif

@if($errors->has('observacao'))
<i>Deverá indicar uma observação correta</i>
@endif


</body>
</html>
