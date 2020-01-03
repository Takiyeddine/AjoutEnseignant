<?php

namespace App\Http\Controllers;
ini_set('memory_limit','256M');
use Illuminate\Http\Request;
use App\Enseignant;
 
class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $enseignant=Enseignant::all();//récuperer tout les enseignats de la base de donnée 
        return response()->json($enseignant); // les mettre dans un fichier json 
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
    /*Sauvegatder dans la base de donnée les données du nouvel 
    enseignant ajouté par l'admin apres avoir remplit le form on recupere les données et on les insere dans la BDD  */
 
    public function store(Request $request)
    {   
        $enseignant=new Enseignant();
        $enseignant->nom=$request->nom;
        $enseignant->prenom=$request->prenom;
        $enseignant->email=$request->email;
        $enseignant->date_naissance=$request->date_naissance;
        $enseignant->specialite=$request->specialite;
        $enseignant->licence=$request->licence;
        $enseignant->master=$request->master;
        $enseignant->doctorat=$request->doctorat;
        $enseignant->experience=$request->experience;
        $enseignant->save();
        return response()->json($enseignant);
       
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
