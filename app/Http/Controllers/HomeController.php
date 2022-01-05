<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.home", [
            "users" => User::all()
        ]);
    }
}
