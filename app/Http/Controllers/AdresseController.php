<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
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
            "adresse"=>"max:50", 
            "code_postal"=>"max:5",
            "ville"=>"max:25", 
        ]); 
        Adresse::create($request->all());
        return redirect()->route('profil')->with('message', 'Votre adresse été ajoutée');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $adresse = Adresse::get(); 
        return view('user.profil' , compact($adresse)); 
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
    public function update(Request $request, Adresse $adresse)
    {
        $request->validate([
            "adresse"=>"required", 
            "code_postal"=>"required",
            "ville"=>"required", 
        ]); 
        $adresse->adresse = $request->input("adresse");
        $adresse->code_postal = $request->input("code_postal"); 
        $adresse->ville = $request->input("ville"); 
        $adresse->save(); 
        return redirect()->route('profil')->with('message', 'Votre adresse été modifiées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $adresse = Adresse::find(intval($id)); 
        $adresse->delete();  
        return redirect()->back()->with('message', "votre adresse à bien été supprimé");
    }
}
