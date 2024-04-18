@extends('layouts.master')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-color: #0080c9;">
    <!-- style="background-image: url('assets/img/about-header.jpg'); -->
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Association Maroccaine De Développement Digital (AMDD)</h2>
        <!-- <ol>
  <li><a href="index.html">Home</a></li>
  <li>About</li>
</ol> -->

    </div>
</div><!-- End Breadcrumbs -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2>Formulaire d'Inscription</h2> @if(Session::has('message_sent'))
  <div class="alert alert-success" role="alert">
    {{Session::get('message_sent')}}
  </div>
  @endif
  
    <form action="{{route('contact.send')}}" method="POST" class="p-4 shadow">
    @csrf
    <div id="partie1">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="stage">Stage</option>
                        <option value="formation">Formation</option>
                        <option value="avec_paiement">Avec Paiement</option>
                        <option value="preinscription">Préinscription</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>
        </div>
        <!-- Prénom, Sexe, Téléphone, Email -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <div>
                        <fieldset>
                            <legend class="sr-only">Sexe</legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="sexe_m" value="M" required>
                                <label class="form-check-label" for="sexe_m">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="sexe_f" value="F" required>
                                <label class="form-check-label" for="sexe_f">F</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            

        </div>
        <!-- Regions and Cities -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="region">Région</label>
                    <select class="form-control" id="region" name="region" onchange="populateCities()" required>
                        <option value="" disabled selected>Choisissez une région</option>
                        <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                        <option value="l'Oriental">l'Oriental</option>
                        <option value="Fès-Meknès">Fès-Meknès</option>
                        <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                        <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                        <option value="Casablanca-Settat">Casablanca-Settat</option>
                        <option value="Marrakech-Safi">Marrakech-Safi</option>
                        <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                        <option value="Souss-Massa">Souss-Massa</option>
                        <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                        <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                        <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <select class="form-control" id="ville" name="ville" required>
                        <option value="" disabled selected>Choisissez d'abord une région</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Additional Fields -->
        <div class="row additionalFields hiddenFields">
            <div class="col-md-6">
                <label for="profession" class="form-title">Profession :</label>
                <input type="text" id="profession" name="profession" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="specialite" class="form-title">Spécialité :</label>
                <input type="text" id="specialite" name="specialite" class="form-control">
            </div>
        </div>
        <!-- Experience and Education -->
        <div class="row">
            <div class="col-md-6">
                <label for="annee_experience" class="toLeft form-title">Années d'expérience :</label>
                <select name="annee_experience" id="annee_experience" class="type type2 form-control w-100">
                    <option value="0">0 ans</option>
                    <option value="1">1 ans</option>
                    <option value="2">2 ans</option>
                    <option value="3">3 ans</option>
                    <option value="4">4 ans</option>
                    <option value="5etplus">plus de 5 ans</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="niveau_etude" class="toLeft form-title">Niveau d'études :</label>
                <select name="niveau_etude" id="niveau_etude" class="type type2 form-control w-100">
                    <option value="doctorat">Doctorat</option>
                    <option value="master">Master</option>
                    <option value="licence">Licence</option>
                    <option value="tech">T/TS/Bac+2</option>
                    <option value="bac">Bac</option>
                    <option value="secondaire">niveau secondaire</option>
                    <option value="preparatoire">Niveau préparatoire</option>
                    <option value="elementaire">Niveau élémentaire</option>
                </select>
            </div>
        </div>
        <!-- Technology Competency -->
        <div class="row">
            <div class="col-md-6">
                <label for="niveau_compétence_matière_technologie" class="toLeft form-title">Votre niveau de compétence en matière d'informatique:</label>
                <select id="niveau_compétence_matière_technologie" name="niveau_compétence_matière_technologie" class="type type2 form-control w-100">
                    <option value="debutant">Niveau débutant - sans connaissances de base.</option>
                    <option value="intermédiaire">Niveau intermédiaire - Connaissance basique de l'utilisation du téléphone et de l'ordinateur de manière simple.</option>
                    <option value="avance">Niveau avancé - Maîtrise solide de l'utilisation du téléphone et de l'ordinateur.</option>
                    <option value="expert">Niveau expert ou professionnel - Spécialisation en programmation et en informatique, maîtrise très avancée de l'utilisation de la technologie.</option>
                </select>
            </div>
            <div class="col-md-6">
    <div class="form-group">
        <label for="mot_de_passe">Mot de passe</label>
        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
    </div>
</div>
</div>
<button type="button" class="btn btn-primary mt-3" onclick="afficherPartie2()">Suivant</button>

        </div>
        <!-- Age and Diploma Level -->
        <div id="partie2" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <label for="age" class="toLeft form-title">Âge :</label>
                <input type="number" id="age" name="age" class="type2 form-control">
            </div>
            <div class="col-md-6">
                <label for="niveau_diplome" class="toLeft form-title">Niveau de diplôme :</label>
                <select name="niveau_diplome" id="niveau_diplome" class="type2 form-control">
                    <option value="Niveau-Bac">Niveau Bac</option>
                    <option value="Bac">Bac</option>
                    <option value="bac1">Bac + 1</option>
                    <option value="bac2">Bac + 2</option>
                    <option value="bac3">Bac + 3</option>
                    <option value="bac4">Bac + 4</option>
                    <option value="bac5">Bac + 5</option>
                    <!-- Add other diploma levels here -->
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="age" class="toLeft form-title">Spécialité :</label>
                <input type="text" id="specialite1" name="specialite1" class="form-control" >
            </div>
            <div class="col-md-6">
                <label for="niveau_diplome" class="toLeft form-title">Type de diplôme :</label>
                <select name="type_diplome" id="type_diplome" class="type2 form-control">
                    <option value="Niveau-Diplome">Niveau Diplome</option>
                    <option value="TS">TS</option>
                    <option value="DUT">DUT</option>
                    <option value="DEUG">DEUG</option>
                    <option value="EST">EST</option>
                    <option value="BTS">BTS</option>
                    <option value="Licence">Licence</option>
                    <option value="Master">Master</option>
                    <option value="Ingénierie">Ingénierie</option>
                    <option value="Autre">Autre</option>
                    <!-- Add other diploma levels here -->
                </select>
            </div>
        </div>

        <!-- Type of Diploma and Specialization -->
        <div class="row">
           
            <div class="col-md-6">
                <label for="type_stage" class="toLeft form-title">Type de stage :</label>
                <select name="type_stage" id="niveau_diplome" class="type2 form-control">
                    <option value="Niveau-Bac">Niveau Bac</option>
                    <option value="Stage d'initiation">Stage d'initiation</option>
                    <option value="Stage de fin de Formation">Stage de fin de Formation</option>
                    <option value="Stage libre">Stage libre</option>
                    <option value="Projet de fin d'études">Projet de fin d'études</option>
                    <option value="Autre">Autre</option>
                 
                    <!-- Add other diploma levels here -->
                </select>
            </div>

            <div class="col-md-6">
                <label for="duree" class="toLeft form-title">Durée :</label>
                <select name="duree" id="duree" class="type2 form-control">
                    <option value="1 Mois">1 Mois</option>
                    <option value="2 Mois">2 Mois</option>
                    <option value="3 Mois">3 Mois</option>
                    <option value="Autre">Autre</option>
                   
                </select>
            </div>
        </div>
        <!-- Type of Stage and Duration -->
       
    
        <!-- Dates and CV -->
        <div class="row">
            <div class="col-md-6">
                <label for="date_debut" class="toLeft form-title">Date de début :</label>
                <input type="date" id="date_debut" name="date_debut" class="form-control" >
            </div>
            <div class="col-md-6">
                <label for="date_fin" class="toLeft form-title">Date de fin :</label>
                <input type="date" id="date_fin" name="date_fin" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="cv" class="toLeft form-title">CV :</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" class="form-control">
            </div>
        </div>
        <!-- Formation Inputs -->
        <div class="row">
            <div class="col-md-12 etape2 etape3 form-group" id="formationInputs">
                <label class="form-title">Sélectionnez la formation souhaitée :</label>
                <select name="profiles" id="profiles" class="type type2 form-control" aria-placeholder="choose a form">
                    <option value="" disabled selected hidden>Choose</option>
                    <option value="1">Algorithmique et Initiation aux programmation C.</option>
                    <option value="2">Initiation au Base de données.</option>
                    <option value="3">Création de siteweb Statique.</option>
                    <option value="4">Méthodologie PFA</option>
                </select>
            </div>
        </div>
        <!-- How did you find us? -->
        <div class="row">
            <div class="col-md-12 checkboxes">
                <label class="form-title">Comment vous nous avez trouvé :</label>
                <div>
                    <label><input type="checkbox" name="competence_options[]" value="Facebook">Facebook</label>
                    <br>
                    <label><input type="checkbox" name="competence_options[]" value="LinkedIn">LinkedIn</label>
                    <br>
                    <label><input type="checkbox" name="competence_options[]" value="WhatsApp">WhatsApp</label>
                    <br>
                    <label><input type="checkbox" name="competence_options[]" value="Autre">Autre</label>
                    <br>
                </div>
            </div>
        </div>
        <!-- Payment Inputs -->
        <div class="row">
            <div class="col-md-12 etape2 etape3 type2 form-group" id="avecPaiementInputs" style="display: flex;">
                <div class="paiment">
                    <label for="cin" class="toLeft form-title">CIN/PassPort :</label>
                    <input type="text" id="cin" name="cin" class="form-control">
                </div>
                <!-- Add other payment inputs here -->
            </div>
        </div>
        <!-- Submit Button -->
        <button type="button" class="btn btn-secondary mt-3" onclick="afficherPartie1()">Retour</button>

        <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </div>
    </form>
</div>

<script>
    function populateCities() {
        var regionSelect = document.getElementById("region");
        var citySelect = document.getElementById("ville");
        var selectedRegion = regionSelect.value;

        // Clear the existing options
        citySelect.innerHTML = "<option value='' disabled selected>Choisissez une ville</option>";

        // Define cities for each region
        var cities = {
            "Tanger-Tétouan-Al Hoceïma": ["Tanger", "Tétouan", "Al Hoceïma"],
            "l'Oriental": ["Oujda", "Nador", "Berkane"],
            "Fès-Meknès": ["Fès", "Meknès", "Taza"],
            "Rabat-Salé-Kénitra": ["Rabat", "Salé", "Kénitra"],
            "Béni Mellal-Khénifra": ["Béni Mellal", "Khénifra"],
            "Casablanca-Settat": ["Casablanca", "Settat"],
            "Marrakech-Safi": ["Marrakech", "Safi"],
            "Drâa-Tafilalet": ["Errachidia", "Ouarzazate", "Zagora"],
            "Souss-Massa": ["Agadir", "Tiznit"],
            "Guelmim-Oued Noun": ["Guelmim", "Tan-Tan"],
            "Laâyoune-Sakia El Hamra": ["Laâyoune", "Boujdour"],
            "Dakhla-Oued Ed-Dahab": ["Dakhla", "Oued Ed-Dahab"]
        };

        // Add cities based on the selected region
        cities[selectedRegion].forEach(function(city) {
            citySelect.innerHTML += "<option value='" + city + "'>" + city + "</option>";
        });
    }
</script>
<script>
    function afficherPartie2() {
        document.getElementById("partie1").style.display = "none";
        document.getElementById("partie2").style.display = "block";
    }

    function afficherPartie1() {
        document.getElementById("partie2").style.display = "none";
        document.getElementById("partie1").style.display = "block";
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




@endsection
