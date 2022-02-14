@extends('layout.base') 

@section('pageContent')

    <div class="container">

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-success">Torna alla home</button></a>

        <h1>Crea un nuovo fumetto</h1>

        <form action="{{route("comics.store")}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="Titolo">Titolo</label>
              <input type="text" class="form-control @error('Titolo') is-invalid @enderror" id="Titolo" name="Titolo" placeholder="Inserisci il nome del fumetto" value="{{old("Titolo")}}">
            @error('Titolo')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control @error('descrizione') is-invalid @enderror" id="descrizione" name="descrizione" rows="8" >{{old("descrizione")}}</textarea>
            @error('descrizione')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="immagine">Immagine</label>
                <input type="text" class="form-control @error('immagine') is-invalid @enderror" id="immagine" name="immagine" placeholder="Inserisci l'url dell'immagine" value="{{old("immagine")}}">
            @error('immagine')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="text" class="form-control @error('prezzo') is-invalid @enderror" id="prezzo" name="prezzo" placeholder="Inserisci il prezzo del fumetto" value="{{old("prezzo")}}">
            @error('prezzo')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="serie">Serie</label>
                <input type="text" class="form-control @error('serie') is-invalid @enderror" id="serie" name="serie" placeholder="Inserisci la serie del fumetto" value="{{old("serie")}}">
            @error('serie')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" placeholder="Inserisci il tipo del fumetto" value="{{old("tipo")}}">
            @error('tipo')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="data_vendita">data_vendita</label>
                <input type="text" class="form-control @error('data_vendita') is-invalid @enderror" id="data_vendita" name="data_vendita" placeholder="Inserisci la data di vendita del fumetto" value="{{old("data_vendita")}}">
            @error('data_vendita')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>

    </div>
 

@endsection