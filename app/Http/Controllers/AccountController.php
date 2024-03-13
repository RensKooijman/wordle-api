<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use App\Models\Leaderboard;
use Illuminate\Support\Facades\Hash;
use DB;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    public function getAllUsers(){
        $account = Accounts::select('account_id', 'first_name', 'last_name', 'email', 'is_admin')->get();
        return response()->json(['user' => $account]);
    }

    public function getUser($id){
        $account = Accounts::select('first_name', 'last_name', 'email', 'is_admin')->where('account_id', $id)->get();
        return response()->json(['user' => $account]);
    }

    public function makeUser(Request $request){
        $arr = $request->all();
        $password = hash::make($arr['password']);
        Accounts::create(['first_name' => $arr['first-name'], 'last_name' => $arr['last-name'], 'email' => $arr['email'], 'password' => $password, 'is_admin' => 0]);
    }

    public function validateUser(Request $request, $id){
        $arr = $request->all();
        $password = Accounts::select('password')->where('account_id', $id)->first();
        $bool = hash::check($arr['password'], $password->password);
        return response()->json(['validated' => $bool]);
    }

    public function deleteUser($id){
        Accounts::where('account_id', $id)->delete();
        Leaderboard::where('account_id', $id)->delete();
        return response()->json(['status' => 'success']);
    }

    public function changeUser($id, Request $request){
        $arr = $request->all();
        Accounts::find($id)->update(['first_name' => $arr['first-name'], 'last_name' => $arr['last-name'], 'email' => $arr['email']]);
    }
}