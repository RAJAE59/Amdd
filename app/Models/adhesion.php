<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'nom',
        'prenom',
        'sexe',
        'telephone',
        'email',
        'mot_de_passe',
        'region',
        'ville',
        'profession',
        'specialite',
        'annee_experience',
        'niveau_etude',
        'niveau_compétence_matière_technologie',
        'age',
        'niveau_diplome',
        'specialite1',
        'type_diplome',
        'type_stage',
        'duree',
        'date_debut',
        'date_fin',
        'cv',
        'profiles',
        'competence_options',
        'cin',
    ];
}
