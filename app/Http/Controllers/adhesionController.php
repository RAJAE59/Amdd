<?php

namespace App\Http\Controllers;
use App\Mail\adhesionMail;
use App\Models\Adhesion; // Ajout de la classe modèle pour l'adhésion
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class adhesionController extends Controller
{
    public function adhesion()
    {
        return view('adhesion');
    }

    public function sendEmail(Request $request)
    {

        $competence_options = json_encode($request->competence_options);
        // Sauvegarde des données dans la base de données
        $adhesion = new Adhesion();
        $adhesion->type = $request->type;
        $adhesion->nom = $request->nom;
        $adhesion->prenom = $request->prenom;
        $adhesion->sexe = $request->sexe;
        $adhesion->telephone = $request->telephone;
        $adhesion->email = $request->email;
        $adhesion->mot_de_passe = $request->mot_de_passe;
        $adhesion->region = $request->region;
        $adhesion->ville = $request->ville;
        $adhesion->profession = $request->profession;
        $adhesion->specialite = $request->specialite;
        $adhesion->annee_experience = $request->annee_experience;
        $adhesion->niveau_etude = $request->niveau_etude;
        $adhesion->niveau_compétence_matière_technologie = $request->niveau_compétence_matière_technologie;
        $adhesion->age = $request->age;
        $adhesion->niveau_diplome = $request->niveau_diplome;
        $adhesion->specialite1 = $request->specialite1;
        $adhesion->type_diplome = $request->type_diplome;
        $adhesion->type_stage = $request->type_stage;
        $adhesion->duree = $request->duree;
        $adhesion->date_debut = $request->date_debut;
        $adhesion->date_fin = $request->date_fin;
        $adhesion->cv = $request->cv;
        $adhesion->profiles = $request->profiles;
        $adhesion->competence_options = $request->competence_options;
        $adhesion->cin = $request->cin;
        $adhesion->competence_options = $competence_options; // Enregistrer la chaîne JSON
        $adhesion->save();

        // Envoi de l'e-mail
        Mail::to('elmimounirajae59@gmail.com')->send(new adhesionMail($request->all()));
        return back()->with('message_sent', 'Votre message a bien été envoyé !');
    }
}
