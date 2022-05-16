<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;
use Auth; 

class CommandeController extends Controller
{
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Commande::create([
            "numero"=> rand(1000000 , 9999999), 
            "prix" => $request->total, 
            "adresse_facturation_id"=> session()->get('adresse_de_facturation')->id , 
            "adresse_livraison_id"=> session()->get('adresse_livraision')->id , 
            "user_id"=> Auth::user()->id
        ]); 
        return redirect()->back()->with('success', ' Votre commande a bien été validé !!!');


        // store order in data base 
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
