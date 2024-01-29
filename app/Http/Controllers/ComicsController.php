<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articoli = Comic::all();
        
        return view("comics.index", compact("articoli"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $nuovo_fumetto=  new Comic();
        $nuovo_fumetto->title =$data["title"];
        $nuovo_fumetto->description=$data["description"];
        $nuovo_fumetto->thumb=$data["thumb"];
        $nuovo_fumetto->price=$data["price"];
        $nuovo_fumetto->type=$data["type"];
        $nuovo_fumetto-> save();

        return redirect()->route("comics.show", $nuovo_fumetto->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ricerca =Comic::find($id);
        return view("comics.show", compact('ricerca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
