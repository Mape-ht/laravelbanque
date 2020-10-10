<?php

namespace App\Http\Controllers;

use App\Clientmoral;
use Illuminate\Http\Request;

class ClientmoralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientmoral = Clientmoral::all();
        return view('clientmoral',['clientmorals'=>$clientmoral,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientmoral = Clientmoral::all();
        return view('clientmoral',['clientmorals'=>$clientmoral,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientmoral = new Clientmoral();
        $clientmoral->raisonsocial = $request->input('raisonsocial');
        $clientmoral->adresse = $request->input('adresse');
        $clientmoral->telephone = $request->input('telephone');
        $clientmoral->save();
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientmoral = Clientmoral::find($id);
        $clientmorals = Clientmoral::all();
        return view('clientmoral',['clientmorals'=>$clientmorals,'clientmoral'=>$clientmoral,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientmoral = Clientmoral::find($id);
        $clientmorals = Clientmoral::all();
        return view('clientmoral',['clientmorals'=>$clientmorals,'clientmoral'=>$clientmoral,'layout'=>'edit']);
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
        $clientmoral = Clientmoral::find($id);
        $clientmoral->raisonsocial = $request->input('raisonsocial');
        $clientmoral->adresse = $request->input('adresse');
        $clientmoral->telephone = $request->input('telephone');
        $clientmoral->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientmoral = Clientmoral::find($id);
        $clientmoral->delete();
        return redirect('/');
    }
}
