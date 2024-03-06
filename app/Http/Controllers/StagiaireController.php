<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class StagiaireController extends Controller
{
    public function afficher()
    {
        $stagiaire=Stagiaire::all();
        return view('stagiaire.acceuil',compact('stagiaire'));
    }

    public function modifier()
    {
        return view('stagiaire.modifier');
    }

    public function ajouter()
    {
        return view('stagiaire.ajouter');
    }

    public function Ajouter_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' => 'required|email',
        ]);

        $stagiaire = new Stagiaire();
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->age = $request->age;
        $stagiaire->email = $request->email;

        // Save the Stagiaire object to the database
        $stagiaire->save();

        return redirect('/Ajouter')->with('status','etudiant ajouté par succées ');
    }
    public function supprimer($id){
        $stagiaire=Stagiaire::find($id);
        if ($stagiaire) {
            $nom = $stagiaire->nom;
            $stagiaire->delete();
            return redirect('/')->with('status', "Stagiaire $nom a été supprimé");
        } 
    }
}
