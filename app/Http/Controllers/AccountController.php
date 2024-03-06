<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
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

    public function getUser($id){
        $account = Accounts::select('first_name', 'last_name', 'email', 'is_admin')->where('account_id', $id)->get();
        return response()->json(['user' => $account]);
    }
}