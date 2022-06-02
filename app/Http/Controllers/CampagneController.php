<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use App\Models\Article; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class CampagneController extends Controller
{

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
            "reduction"=>"required",
            "date_debut"=>"required",
            "date_fin"=>"required",
        ]); 

       $campagne =  Campagne::create($request->all());

        foreach (Article::all() as $article){

            if ( isset($request['article' . $article->id])){

                $campagne->articles()->attach([$article->id]) ; 
                
            }

        }

        return redirect()->back()->with('message', "La campagne à bien été ajouté !!! ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $campagnes = Campagne::get()->where('date_fin', '>', date('Y-m-d'))->load('articles');
       return view('campagne.index', compact('campagnes')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $campagne = Campagne::find($id);
        $campagneArticlesIds = DB::table('campagne_articles')->where('campagne_id', '=', $campagne->id)->get('article_id');
        $articles = Article::all() ; 
        $campagne->with("articles");
        return view("admin.campagne" , compact("campagne", "articles" , "campagneArticlesIds"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Campagne $campagne)
    {
        $request->validate([
            "nom"=>"required", 
            "reduction"=>"required",
            "date_debut"=>"required",
            "date_fin"=>"required", 
        ]); 
        $campagne->nom = $request->input("nom");
        $campagne->reduction = $request->input("reduction"); 
        $campagne->date_debut = $request->input("date_debut"); 
        $campagne->date_fin = $request->input("date_fin"); 
        $campagne->save(); 

        foreach ($campagne->articles as $article) {
            $campagne->articles()->detach($article);
        }

        foreach (Article::all() as $article){

            if ( isset($request['article' . $article->id])){

                $campagne->articles()->attach([$article->id]) ; 
                
            }

        }

        return redirect()->back()->with('message', 'Votre campagne été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campagne = Campagne::find($id); 
        $campagne->delete(); 
        return redirect()->back()->with('message', "La campagne à bien été supprimé !!! ");
    }
}
