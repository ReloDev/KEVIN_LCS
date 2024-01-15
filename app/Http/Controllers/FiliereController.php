<?php

namespace App\Http\Controllers;
use App\Models\Filiere;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('Filiere.index',[
            'filieres'=>$filieres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filiere = new Filiere();
        $filiere->nomFiliere = $request->nomFiliere;
        $filiere->save();
        return redirect()->route('Filiere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filiere = Filiere::find($id);
        return view('Filiere.show',[
            'filiere'=>$filiere
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = Filiere::find($id);
        return view('Filiere.edit',[
            'filiere'=>$filiere
        ]);
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
        $val = $request->validate([
            'nomFiliere' => 'required'
        ]);
        $filiere = Filiere::whereId($id)->update($val);
        return redirect()->route('Filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = Filiere::find($id)->delete();
        return redirect()->route('Filiere.index');
    }
}
