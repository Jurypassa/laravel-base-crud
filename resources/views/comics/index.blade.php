@extends('layout.base') 

@section('pageContent')

<div class="container">

  <div class="text-center m-4">
    <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Crea un nuovo fumetto</button></a> 
  </div>
  

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
          <td><a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a></td>
          <td>
            <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
          </td>

          
        </tr> 
        @endforeach  
    </table>

</div>

@endsection