<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach ($comics as $comic) {
            $newComics = new Comic();
            $newComics->Titolo = $comic["title"];
            $newComics->descrizione = $comic["description"];
            $newComics->immagine = $comic["thumb"];
            $newComics->prezzo = $comic["price"];
            $newComics->serie = $comic["series"];
            $newComics->data_vendita = $comic["sale_date"];
            $newComics->tipo = $comic["type"];
            $newComics->save(); 

        }
    }
}
