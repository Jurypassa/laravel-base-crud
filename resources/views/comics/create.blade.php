@extends('layout.base') 

@section('pageContent')

    <div class="container">

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-success">Torna alla home</button></a>

        <h1>Crea un nuovo fumetto</h1>

        <form action="{{route("comics.store")}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="Titolo">Titolo</label>
              <input type="text" class="form-control" id="Titolo" name="Titolo" placeholder="Inserisci il nome del fumetto">
            </div>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" id="descrizione" name="descrizione" rows="8"></textarea>
            </div>

            <div class="form-group">
                <label for="immagine">Immagine</label>
                <input type="text" class="form-control" id="immagine" name="immagine" placeholder="Inserisci l'url dell'immagine">
            </div>

            <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="text" class="form-control" id="prezzo" name="prezzo" placeholder="Inserisci il prezzo del fumetto">
            </div>

            <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" class="form-control" id="serie" name="serie" placeholder="Inserisci la serie del fumetto">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Inserisci il tipo del fumetto">
            </div>

            <div class="form-group">
                <label for="data_vendita">data_vendita</label>
                <input type="text" class="form-control" id="data_vendita" name="data_vendita" placeholder="Inserisci la data di vendita del fumetto">
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
          </form>

    </div>
 

@endsection