@extends('layout.base') 

@section('pageContent')

<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">prezzo</th>
            <th scope="col">serie</th>
            <th scope="col">data_vendita</th>
            <th scope="col">tipo</th>
    
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
          <tr>
            <th>{{$comic->id}}</th>
            <th>{{$comic->Titolo}}</th>
            <td>{{$comic->prezzo}}</td>
            <td>{{$comic->serie}}</td>
            <td>{{$comic->data_vendita}}</td>
            <td>{{$comic->tipo}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
            
          </tr> 
          @endforeach  
      </table>

</div>

@endsection