<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamme; 

class GammeController extends Controller
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
        ]); 
        Gamme::create($request->all()); 
        return redirect()->back()->with('message', "La gamme à bien été ajouté !!! ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gamme = Gamme::find($id); 
        return view('admin.gamme' , compact( 'gamme'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamme $gamme)
    {
        $request->validate([
            "nom"=>"required", 
        ]); 
        $gamme->nom = $request->input("nom"); 
        $gamme->save();
        return redirect()->back()->with('message', 'Votre gamme été modifiées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamme = Gamme::find($id); 
        $gamme->delete(); 
        return redirect()->back()->with('message', "La gamme à bien été supprimer !!! ");

    }
}
