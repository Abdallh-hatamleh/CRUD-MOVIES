<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = movie::all();
        return view('home',['movies' => $movies]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        movie::create(['name' => $request['name'],'desc' => $request['desc'] , 'genre' => $request['genre']]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(movie $movie)
    {
        //
        return view('movie',['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movie $movie)
    {
        //
        return view('edit',['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movie $movie)
    {
        //
        $movie->update(['name' => $request['name'] , 'desc' => $request['desc'] , 'genre' => $request['genre']]);
        return redirect('/m/' . $movie['id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movie $movie)
    {
        //
        $movie->delete();
        return redirect('/');
    }
}
