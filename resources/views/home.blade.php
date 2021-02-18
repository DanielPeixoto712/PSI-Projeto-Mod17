@extends('layouts.app')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="{{('jumbotrom.css')}}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h4>{{ __('Lista') }}</h4></div>
<div align="center">
    <br>
<button type="button" class="btn btn-primary"> <a style="color: white" href="{{route('musicos.index')}}">Musicos</a></button><br><br>
   <button type="button" class="btn btn-primary"> <a style="color: white" href="{{route('musicas.index')}}">Musicas</a></button><br><br>
   <button type="button" class="btn btn-primary"> <a style="color: white" href="{{route('generos.index')}}">Generos</a></button><br><br>
    <button type="button" class="btn btn-primary"><a style="color: white" href="{{route('albuns.index')}}">Albuns</a></button><br>
</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 align="center">{{ __('Você efetuou o Login!') }}</h4>
                    <h6>A sua ID é :
                        <h3>{{Auth::user()->id}}</h3>
                        
                    </h6>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
