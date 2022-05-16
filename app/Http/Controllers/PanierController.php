<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $panier = session()->get('cart');
        return view('panier.show', compact('panier'));
    }


    public function update_cart( Request $request)
    {
        $cart = session()->get("cart");
        if($request->id && $request->quantite){
            $cart[$request->id]["quantite"] = $request->quantite; 
            session()->put("cart" , $cart); 
        }
        return back()->with('success', 'La quantité de votre produit a bien été modifier ');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ajouter_au_panier(Request $request )
    { 
        $cart = session()->get("cart"); 
        
        if(!$cart) {
            $cart = [
                $request->id =>[
                    "id" => $request->id,
                    "nom" =>  $request->non, 
                    "prix" => $request->prix, 
                    "description" => $request->description, 
                    "quantite" => $request->quantite 
                ]
            ];
            session()->put('cart', $cart);    
            return redirect()->back()->with('success', 'Votre produit a bien été ajouter au panier ');
        }

        if(isset($cart[$request->id])){
            $cart[$request->id]["quantite"]+ 1; 
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Votre produit a bien été ajouter au panier ');
        }


        $cart[$request->id] = [
            "id" => $request->id,
            "nom" =>  $request->non, 
            "prix" => $request->prix, 
            "description" => $request->description, 
            "quantite" => 1
        ]; 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Votre produit a bien été ajouter au panier ');
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

    public function empty_cart(){

        session()->forget('cart'); 
        return back()->with('success', 'Votre panier a bien été supprimer !! ');     
    }

    public function delete(Request $request){
        if($request->id){
            $cart = session()->get("cart");
            if(isset($cart[$request->id])){
                unset($cart[$request->id]); 
                session()->put("cart" , $cart); 
                return back()->with('success', 'Votre produit a bien été supprimer de votre panier !! ');     
            }    

        }
    }
}
