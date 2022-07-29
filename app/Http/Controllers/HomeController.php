<?php

namespace App\Http\Controllers;

use App\Models\AllUser;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = AllUser::all();
        return view('home', compact('users'));
    }
}