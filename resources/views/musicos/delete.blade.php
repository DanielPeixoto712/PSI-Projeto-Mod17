<h2>Deseja eliminar o musico: </h2>
<h2>{{$musico->nome}}</h2>
<form method="post" action="{{route('musicos.destroy',['id'=>$musico->id_musico])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">
</form>

@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">{{session('mensagem')}}
	{{session('mensagem')}}
	@endif

