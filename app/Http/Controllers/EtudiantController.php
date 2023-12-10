<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        return view("etudiant.liste");
    }
    public function ajouter_etudiant(){
        return view("etudiant.ajouter");
    }
    public function delete_etudiant(){
        return view("etudiant.delete");
    }
    public function ajouter_etudiant_traitement(Request $request){
        $request->validate([
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->save();

        return redirect('/ajouter')->with('status',"l'etudiant a bien été ajouté avec succès");
    }
}
