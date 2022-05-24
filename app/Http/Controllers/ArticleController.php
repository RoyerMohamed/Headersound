<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

public function create(Request $request){

    $request->validate([
        "nom"=>"required", 
        "description"=>"required",
        "description_detaillee"=>"required",
        "prix"=>"required",
        "stock"=>"required",
        "note"=>"required",
    ]); 
    Article::create($request->all()); 
    return redirect()->back()->with('message', "Le produit à bien été ajouté !!! ");
}

    public function index(){
        $articles =  Article::with([
            'campagnes' =>  function ($query) {
                $query->whereDate('date_debut', '<=', date('Y-m-d'))->whereDate('date_fin', '>=', date('Y-m-d'))->get();
            }
        ])->get();
        return view('boutique.index' , compact('articles')); 
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $article = Article::Where("id", intval($request->input('article_id')))->with('gamme')->get(); 
        $article->load([
                'campagnes' =>  function ($query) {
                    $query->whereDate('date_debut', '<=', date('Y-m-d'))
                    ->whereDate('date_fin', '>=', date('Y-m-d'))->get();
                }
            ]); 

        $article = $article[0]; 
        return view('boutique.details' , compact('article')); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
