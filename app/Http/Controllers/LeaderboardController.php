<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\Accounts;
use Illuminate\Http\Request;
use DB;

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

    public function put(Request $request){
        $arr = $request->all();
        Leaderboard::updateOrCreate(['account_id' => $arr['id']], ['score' => DB::raw('GREATEST(score, ' . $arr['score'] . ')')]);
        return response()->json(['status' => 'success']);
    }
    public function delete($id){
        Leaderboard::where(['account_id', $id])->delete();
        return response()->json(['status' => 'success']);
    }
}