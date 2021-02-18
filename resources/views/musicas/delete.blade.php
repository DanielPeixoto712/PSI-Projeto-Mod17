<h2>Deseja eliminar a musica: </h2>
<h2>{{$musica->nome}}</h2>
<form method="post" action="{{route('musicas.destroy',['id'=>$musica->id_musica])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">
</form>

@if(session()->has('mensagem'))
<div class="alert alert-danger" role="alert">{{session('mensagem')}}
	{{session('mensagem')}}
	@endif

