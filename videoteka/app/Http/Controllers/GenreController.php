<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Genre::all(); //preko modela dobavljeni svi podaci iz baze
        //sada proslediti to ka view

        return view('genre.index',['data'=>$data]); 
        //u blade.php. se sluzim imenom koje je kljuc asoc.niza
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //pripremamo formu za unos
        //strane kljuceve ugl prikacujemo u select, radio button
        //ovde ne trazimo nista iz baze, samo return
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // u request su svi podaci koji su formom (post) poslati
        //kljuc u funkciji validate 'name_en' je name atribut u inputu forme
        $request->validate([
            'name_en' => 'required|unique:genres,name_en',
            'name_sr' => 'nullable|unique:genres,name_sr'
        ]);
         
        //ovo se izvrsava, kada kod prodje validaciju

        //1.nacin preko asoc.niza(sva fillable polja, ali moze bez id),moze da ima vise, ne i manje
        //Genre::create(['name_en'=>'mistery', 'name_sr'=>'misterija']);
        
        //2.nacin - instanca klase
        /*
        $g=new Genre;
        $g->id=5;
        $g->name_en='Mistery';
        $g->name_sr='Misterija';
        $g->save();
        */

        //3.nacin
        Genre::create($request->all()); 
        return redirect()->route('genre.index');            
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
