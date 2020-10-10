<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCompte()
    {
        $compte = Compte::all();
        return view('compte',['comptes'=>$compte,'layout'=>'indexCompte']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCompte()
    {
        $compte = Compte::all();
        return view('compte',['comptes'=>$compte,'layout'=>'createCompte']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCompte(Request $request)
    {
        $compte = new Compte();
        $compte->numero = $request->input('numero');
        $compte->clerib = $request->input('clerib');
        $compte->solde = $request->input('solde');
        $compte->typefrais = $request->input('typefrais');
        $compte->typecompte = $request->input('typecompte');
        $compte->dateouverture = $request->input('dateouverture');
        $compte->save();
        return redirect('/compte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCompte($id)
    {
        $compte = Compte::find($id);
        $comptes = Compte::all();
        return view('compte',['comptes'=>$comptes,'compte'=>$compte,'layout'=>'showCompte']); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCompte($id)
    {
        $compte = Compte::find($id);
        $comptes = Compte::all();
        return view('compte',['comptes'=>$comptes,'compte'=>$compte,'layout'=>'editCompte']); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCompte(Request $request, $id)
    {
        $compte = Compte::find($id);
        $compte->numero = $request->input('numero');
        $compte->clerib = $request->input('clerib');
        $compte->solde = $request->input('solde');
        $compte->typefrais = $request->input('typefrais');
        $compte->typecompte = $request->input('typecompte');
        $compte->dateouverture = $request->input('dateouverture');
        $compte->save();
        return redirect('/compte');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCompte($id)
    {
        $compte = Compte::find($id);
        $compte->delete();
        return redirect('/compte');
    }
}
