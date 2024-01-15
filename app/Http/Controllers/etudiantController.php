<?php

namespace App\Http\Controllers;

use App\Models\etudiants;
use App\Models\Filiere;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = etudiants::all();
        return view('Etudiant.index',[
            'etudiants'=>$etudiants
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('Etudiant.create',[
            'filieres' => $filieres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pathDiplome = $request->file('diplome')->store('diplome', 'public');
        $pathToph = $request->file('toph')->store('topn', 'public');
        $etudiant = new etudiants();
        $etudiant->nom = $request->nom; 
        $etudiant->prenoms = $request->prenoms; 
        $etudiant->age = $request->age; 
        $etudiant->email = $request->email; 
        $etudiant->sexe = $request->sexe; 
        $etudiant->email = $request->email; 
        $etudiant->telephone = $request->telephone; 
        $etudiant->id_filiere = $request->id_filiere; 
        $etudiant->diplome = $pathDiplome; 
        $etudiant->toph = $pathToph; 
        $etudiant->save();
        
        return redirect()->route('Etudiant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = etudiants::find($id);
        return view('Etudiant.show',[
            'etudiant'=>$etudiant
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
        $etudiant = etudiants::find($id);
        return view('Etudiant.edit');
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
            'nom' => 'required',
            'prenoms' => 'required',
            'age' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'id_filiere' => 'required',
            'diplome' =>  'required|file|mimes:jpg,png,jpeg,gif,svg,pdf',
            'toph' =>  'required|file|mimes:jpg,png,jpeg,gif,svg,pdf'
        ]);
        $etudiant = etudiants::whereId($id)->update($val);
        return redirect()->route('Etudiant.index');
    }

    
    public function oec(Request $request, $id){
        etudiants::whereId($id)->update(['encours'=>1]);
        return redirect()->route('Etudiant.index');
    }

    public function nec(Request $request, $id){
        etudiants::whereId($id)->update(['encours'=>0]);
        return redirect()->route('Etudiant.index');
    }

    public function oac(Request $request, $id){
        etudiants::whereId($id)->update(['accepte'=>1]);
        return redirect()->route('Etudiant.index');
    }

    public function nac(Request $request, $id){
        etudiants::whereId($id)->update(['accepte'=>0]);
        return redirect()->route('Etudiant.index');
    }

    public function encours(){
        $etudiants=etudiants::all()->where('encours',1) ;
        return view('Etudiant.encours',[
            'etudiants'=>$etudiants
        ]);
    }

    public function refuse(){
        $etudiants=etudiants::all()->where('accepte',0) ;
        return view('Etudiant.refuse',[
            'etudiants'=>$etudiants
        ]);
    }

    public function accepte(){
        $etudiants=etudiants::all()->where('accepte',1) ;
        return view('Etudiant.accepte',[
            'etudiants'=>$etudiants
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = etudiants::find($id)->delete();
        return redirect()->route('Etudiant.index');
    }
}
