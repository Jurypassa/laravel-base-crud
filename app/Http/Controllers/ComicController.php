<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            "Titolo"=>"required|string|max:100",
            "descrizione"=>"required|string",
            "immagine"=>"required|url",
            "prezzo"=>"required|string|max:7",
            "serie"=>"required|string|max:50",
            "data_vendita"=>"required|string|max:10",
            "tipo"=>"required|string|max:20"
        ]);

        $newComic = Comic::create($data);

        return redirect()->route("comics.show", $newComic->id);        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);

        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            "Titolo"=>"required|string|max:100",
            "descrizione"=>"required|string",
            "immagine"=>"required|url",
            "prezzo"=>"required|string|max:7",
            "serie"=>"required|string|max:50",
            "data_vendita"=>"required|string|max:10",
            "tipo"=>"required|string|max:20"
        ]);

        $comic->update($data);

        return redirect()->route("comics.show", $comic->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
