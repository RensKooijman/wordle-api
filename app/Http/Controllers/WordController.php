<?php

namespace App\Http\Controllers;

use App\Models\Words;

class WordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    public function getWord()
    {
        $word = Words::inRandomOrder()->first();

        return response()->json(['words' => $word->words]);
    }

    public function getAllWords()
    {
        $words = Words::select('words')->get();

        return response()->json(['words' => $words]);
    }

}
