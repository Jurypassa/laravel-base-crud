@extends('layout.base') 

@section('pageContent')

    <div class="container text-center">

        <h1>{{$comics->Titolo}}</h1>
        <img class="text-center" src="{{$comics->immagine}}" alt="{{$comics->Titolo}}">
        <p>{{$comics->descrizione}}</p>
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Home</button></a>

    </div>
 

@endsection