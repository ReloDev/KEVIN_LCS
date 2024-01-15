<?php

namespace App\Http\Controllers;
use App\Models\Professeur;

use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professeurs = Professeur::all();
        return view('Professeur.index',[
            'professeurs' => $professeurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Professeur.create');
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$path = $request->file('pdf')->store('pdf', 'public');
        $pathCv = $request->file('cv')->store('cv', 'public');
        $pathPhoto = $request->file('photo')->store('photo', 'public');
        $professeur = new Professeur();
        $professeur->nom = $request->nom;
        $professeur->prenoms = $request->prenoms;
        $professeur->age = $request->age;
        $professeur->telephone = $request->telephone;
        $professeur->email = $request->email;
        $professeur->sexe = $request->sexe;
        $professeur->cv = $pathCv;
        $professeur->photo = $pathPhoto;
        $professeur->save();
        return  redirect()->route('Professeur.encours');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professeur = Professeur::find($id);
        return view('Professeur.show',[
            'professeur'=>$professeur
        ]);
    }

    public function oec(Request $request, $id){
        Professeur::whereId($id)->update(['encours'=>1]);
        return redirect()->route('Professeur.index');
    }

    public function nec(Request $request, $id){
        Professeur::whereId($id)->update(['encours'=>0]);
        return redirect()->route('Professeur.index');
    }

    public function oac(Request $request, $id){
        Professeur::whereId($id)->update(['accepte'=>1]);
        return redirect()->route('Professeur.index');
    }

    public function nac(Request $request, $id){
        Professeur::whereId($id)->update(['accepte'=>0]);
        return redirect()->route('Professeur.index');
    }

    public function encours(){
        $professeurs=Professeur::all()->where('encours',1) ;
        return view('Professeur.encours',[
            'professeurs'=>$professeurs
        ]);
    }

    public function refuse(){
        $professeurs=Professeur::all()->where('accepte',0) ;
        return view('Professeur.encours',[
            'professeurs'=>$professeurs
        ]);
    }

    public function accepte(){
        $professeurs=Professeur::all()->where('accepte',1) ;
        return view('Professeur.encours',[
            'professeurs'=>$professeurs
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
        $professeur = Professeur::find($id);
        return view('Professeur.edit',[
            'professeur'=>$professeur
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
            'nom' => 'required',
            'prenoms' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'sexe' => 'required',
            'cv' =>  'required|file|mimes:jpg,png,jpeg,gif,svg,pdf',
            'photo' =>  'required|file|mimes:jpg,png,jpeg,gif,svg,pdf'
        ]);
        $professeur = Professeur::whereId($id)->update($val);
        return  redirect()->route('Professeur.index');
                                            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professeur = Professeur::find($id)->delete();
        return  redirect()->route('Professeur.index');
    }
}
