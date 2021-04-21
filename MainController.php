<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
//        $users = User::all();
//        $users = Phonebook::orderBy('phone')->get();

        $user = User::find(1);
        $users = $user->phons;

//        $user = User::find(1);
//        $users = $user->buys;

//        $user = User::find(1);
//        $users = $user->shops;


        return view('/account_1', compact('users'));
    }
}
