<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adresse; 
use Auth; 

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validation = session()->get('cart'); 
        $user = Auth::user(); 
        $user->load("adresses"); 
        return view("validation.index")->with('validation',$validation)->with('user',$user) ; 

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adresse_de_livraision(Request $request){
        $adresse = Adresse::find(intval($request->input('adresse_livraision_id'))); 
        session()->put('adresse_livraision', $adresse);    
        return redirect()->back()->with('success', 'Votre addresse de livrasion a bien été ajouter !!!');
    }
    
    /////facturation   
    public function adresse_de_facturation(Request $request)
    {
        $adresse = Adresse::find(intval($request->input('adresse_de_facturation_id')));       
        session()->put('adresse_de_facturation', $adresse);    
        return redirect()->back()->with('success', 'Votre addresse de facturation a bien été ajouter !!!');
    }

    // clasique express point relais 

    public function frais_de_port(Request $request){
        session()->put('frai_de_port', $request->input('flexRadioDefault'));    
        return redirect()->back()->with('success', 'les frais de port on été mit a jours !!! ');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
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
