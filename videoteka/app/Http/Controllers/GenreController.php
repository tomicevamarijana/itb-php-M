<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        // prihvati sve parametre iz request, menja prva dva nacina
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
    //$genre=Genre::find($request->input('id')) //u pozadnini se ovo radi, bez obzira koji je parametar rute
    public function edit(Genre $genre)
    {
        //edit slicno kao create, vodi na formu ali popunjenu
        return view('genre.edit',compact('genre'));
        //isto je i sledece: (2 nacina prosledjivanja parametra view-u)
        //return view('genre.edit',['genre'=>$genre]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        // menja se model iz parametra, a u requestu su podaci sa forme
        //prvo validator
        //prvo validator
        $request->validate([
            'name_en' => ['required',
            //'unique:genres,name_en'
            Rule::unique('genres','name_en')->ignore($genre->id)
        ],
            'name_sr' => ['nullable',
            //'unique:genres,name_sr'
            Rule::unique('genres','name_sr')->ignore($genre->id)
            ]
        ]);

        $genre->update($request->all()); 
        //request all vraca asoc.niz editovanih podataka iz forme
        
        return redirect()->route('genre.index'); 
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
