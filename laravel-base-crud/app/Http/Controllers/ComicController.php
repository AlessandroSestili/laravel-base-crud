<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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

        return view("comics.index" , [
            "comics" => $comics
        ]);
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
        // Valida i dati in ingresso dal Form in "create"
        $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "type" => "required"
        ]);

        // Recupera tutti i dati che ha inserito l'utente dal "request"
        $newComicData = $request->all();

        // Crea istanza del Model Comic
        $newComic = new Comic();
        // Riempie i dati del Model Comic
        $newComic->fill($newComicData);
        // Salva i dati nel database
        $newComic->save();

        return redirect()->route("comics.index"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view("comics.show" , compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view("comics.edit" , [
            "comic" => $comic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valida i dati in ingresso dal Form in "create"
        $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "type" => "required"
        ]);

        // Recupera tutti i dati che ha inserito l'utente dal "request"
        $newComicData = $request->all();

        $comic = Comic::findOrFail($id);
        $comic->update($newComicData);

        return redirect()->route("comics.index"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return view("comics.index");
    }
}
