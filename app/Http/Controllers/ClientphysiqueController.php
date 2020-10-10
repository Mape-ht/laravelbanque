<?php

namespace App\Http\Controllers;

use App\Clientphysique;
use Illuminate\Http\Request;

class ClientphysiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexClientphysique()
    {
        $clientphysique = Clientphysique::all();
        return view('clientphysique',['clientphysiques'=>$clientphysique,'layout'=>'indexClientphysique']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createClientphysique()
    {
        $clientphysique = Clientphysique::all();
        return view('clientphysique',['clientphysiques'=>$clientphysique,'layout'=>'createClientphysique']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClientphysique(Request $request)
    {
        $clientphysique = new Clientphysique();
        $clientphysique->nom = $request->input('nom');
        $clientphysique->prenom = $request->input('prenom');
        $clientphysique->adresse = $request->input('adresse');
        $clientphysique->telephone = $request->input('telephone');
        $clientphysique->statut = $request->input('statut');
        $clientphysique->salaire = $request->input('salaire');
        $clientphysique->save();
        return redirect('/clientphysique');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showClientphysique($id)
    {
        $clientphysique = Clientphysique::find($id);
        $clientphysiques = Clientphysique::all();
        return view('clientphysique',['clientphysiques'=>$clientphysiques,'clientphysique'=>$clientphysique,'layout'=>'showClientphysique']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editClientphysique($id)
    {
        $clientphysique = Clientphysique::find($id);
        $clientphysiques = Clientphysique::all();
        return view('clientphysique',['clientphysiques'=>$clientphysiques,'clientphysique'=>$clientphysique,'layout'=>'editClientphysique']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateClientphysique(Request $request, $id)
    {
        $clientphysique = Clientphysique::find($id);
        $clientphysique->nom = $request->input('nom');
        $clientphysique->prenom = $request->input('prenom');
        $clientphysique->adresse = $request->input('adresse');
        $clientphysique->telephone = $request->input('telephone');
        $clientphysique->statut = $request->input('statut');
        $clientphysique->salaire = $request->input('salaire');
        $clientphysique->save();
        return redirect('/clientphysique');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyClientphysique($id)
    {
        $clientphysique = Clientphysique::find($id);
        $clientphysique->delete();
        return redirect('/clientphysique');
    }
}
