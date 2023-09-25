<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{   
    
    
    public function __construct(){
        $this->middleware('auth')->except('index', 'show','contactUs');
    }
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogame.index', compact('videogames'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view ('videogame.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {   
        $videogame = Videogame::create([
            'title'=> $request->title,
            'category'=> $request->category,
            'description'=> $request->description,
            'img' => $request-> file('img') ? $request-> file('img')->store('public/media') : '/media/default.jpg',
            'price'=> $request->price
        ]);
        
        
        return redirect(route('videogame.create'))->with('message', 'Videogioco caricato!');
    }
    
    /**
    * Display the specified resource.
    */
    public function show($id)
    {
        $videogame = Videogame::findOrFail($id);
        return view('videogame.detail', compact('videogame'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Videogame $videogame)
    {
        return view('videogame.edit', compact('videogame'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Videogame $videogame)
    {
        $videogame->update([
            $videogame->title = $request->title,
            $videogame->category = $request->category,
            $videogame->description = $request->description,
            $videogame->price = $request->price,
        ]);
        
        if($request->img){
            $videogame->update([
                $videogame->img = $request->file('img')->store('public/media')
            ]);
        }
        
        return redirect(route('videogame.index'))->with('message', 'Videogioco correttamente modificato');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect(route('videogame.index'))->with('message', 'Prodotto correttamente cancellato');
    }
}
