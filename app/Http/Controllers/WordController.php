<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Carbon\Carbon;

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

    public function getWordOfDay()
    {
        $today = Carbon::today();
        $wordOfDay = Words::where('used_on', $today->toDateString())->first();

        if (!$wordOfDay) {
            $wordOfDay = Words::where('is_used', false)->inRandomOrder()->first();

            if ($wordOfDay) {
                $wordOfDay->is_used = true;
                $wordOfDay->used_on = $today->toDateString();
                $wordOfDay->save();
            }
        }

        if ($wordOfDay) {
            return response()->json(['word' => $wordOfDay->words]);
        } else {
            return response()->json(['error' => 'No available words'], 404);
        }
    }

}
