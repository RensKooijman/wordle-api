<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\Accounts;

class LeaderboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    public function getAll(){
        $leaderbord = Leaderboard::leftjoin('accounts', 'accounts.account_id', '=', 'leaderboard.account_id')->select('score', 'first_name', 'last_name')->orderBy('score', 'desc')->get();
        return response()->json(['people' => $leaderbord]);
    }
}