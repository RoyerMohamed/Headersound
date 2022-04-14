<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show()
    {
        $user = Auth::user(); 
        $user->load("adresses");  
        return view('user.profil' , compact('user')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user(); 
        return view('user.profil' , compact('user'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "nom"=>"required", 
            "prenom"=>"required",
        ]); 
        $user->nom = $request->input('nom'); 
        $user->prenom = $request->input('prenom'); 
        $user->save(); 
        return redirect()->route('profil')->with('message', 'Vos informations on été modifiées');
    }


    public function updatePassword(Request $request){
        $user = Auth::user(); 
        $request->validate([
            'oldpassword' => 'required|min:3|max:50',
            'newPassword' => ['required',
             Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()],
        ]);
        
        //verif 
        if(Hash::check($request->input('oldpassword') , $user->password) ){
            if($request->input('newPassword') !== $request->input('oldpassword')){
                $user->password = Hash::make($request->input('newPassword'));  
                $user->save();
                return redirect()->route('profil')->with('message', 'Your password change has well succes');
            }else{
                return redirect()->back()->withErrors(['password_error', 'Your current password and your old passeword are the same!']);
            }           
        }else{
            return redirect()->back()->with('error', "Your current password is incorrect "); 
        }

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
