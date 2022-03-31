<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gamme;
use App\Models\User;
use   Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = article::get();
        return view('home' , compact("article"));
    }
}
