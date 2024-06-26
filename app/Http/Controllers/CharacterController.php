<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Anime $anime)
    {
        $anime->load('characters');
        return view('anime.character', compact('anime'));
    }
}
