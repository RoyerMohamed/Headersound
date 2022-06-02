<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Gamme; 

class ArticleController extends Controller
{

public function create(Request $request){


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
        $article = Article::find($id); 
        $gammes = Gamme::all(); 
        return view('admin.article' , compact('article' , 'gammes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            "nom"=>"required", 
            "description"=>"required",
            "description_detaillee"=>"required", 
            "prix"=>"required", 
            "stock"=>"required", 
            "note"=>"required", 
            "gamme_id"=>"required", 

        ]); 
        $article->nom = $request->input("nom");
        $article->description = $request->input("description"); 
        $article->description_detaillee = $request->input("description_detaillee"); 
        $article->prix = $request->input("prix"); 
        $article->stock = $request->input("stock"); 
        $article->note = $request->input("note"); 
        $article->gamme_id = $request->input("gamme_id"); 
        $article->save(); 
        return redirect()->back()->with('message', 'Votre article été modifiées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id); 
        $article->delete(); 
        return redirect()->back()->with('message', "Le produit à bien été supprimer !!! ");
    }
}
