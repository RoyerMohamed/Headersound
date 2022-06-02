<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campagne; 

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
        $articles = Article::orderBy("note" , 'desc')->limit(3)->with(['campagnes' => function ($query) {
            $query->whereDate('date_debut', '<=', date('Y-m-d'))
                ->whereDate('date_fin', '>=', date('Y-m-d'))->get();
        }])->get(); 

        $campagnes = Campagne::get()->where('date_debut', '<', date('Y-m-d'))->where('date_fin', '>', date('Y-m-d'))->load('articles');
        
        return view('home')->with('articles' , $articles)->with('campagnes' , $campagnes);
    }
}
