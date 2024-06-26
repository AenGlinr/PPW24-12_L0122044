<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::with('characters')->get();
        return view('anime.index', compact('animes'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre' => 'required|string|max:255',
            'release_date' => 'required|date',
            'rating' => 'required|string|max:255',
        ]);

        Anime::create($request->all());

        return redirect()->route('home')->with('success', 'Anime created successfully.');
    }
}
