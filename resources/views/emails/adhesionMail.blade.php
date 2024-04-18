<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhesion Message</title>
</head>
<body>
    <h1>Adhesion Message</h1>
    <p>Type: {{ isset($details['type']) && is_string($details['type']) ? $details['type'] : '' }}</p>
    <p>Nom: {{ isset($details['nom']) && is_string($details['nom']) ? $details['nom'] : '' }}</p>
    <p>Prénom: {{ isset($details['prenom']) && is_string($details['prenom']) ? $details['prenom'] : '' }}</p>
    <p>Sexe: {{ isset($details['sexe']) && is_string($details['sexe']) ? $details['sexe'] : '' }}</p>
    <p>Téléphone: {{ isset($details['telephone']) && is_string($details['telephone']) ? $details['telephone'] : '' }}</p>
    <p>Email: {{ isset($details['email']) && is_string($details['email']) ? $details['email'] : '' }}</p>
    <p>Mot de passe: {{ isset($details['mot_de_passe']) && is_string($details['mot_de_passe']) ? $details['mot_de_passe'] : '' }}</p>
    <p>Région: {{ isset($details['region']) && is_string($details['region']) ? $details['region'] : '' }}</p>
    <p>Ville: {{ isset($details['ville']) && is_string($details['ville']) ? $details['ville'] : '' }}</p>
    <p>Profession: {{ isset($details['profession']) && is_string($details['profession']) ? $details['profession'] : '' }}</p>
    <p>Spécialité: {{ isset($details['specialite']) && is_string($details['specialite']) ? $details['specialite'] : '' }}</p>
    <p>Années d'expérience: {{ isset($details['annee_experience']) && is_string($details['annee_experience']) ? $details['annee_experience'] : '' }}</p>
    <p>Niveau d'études: {{ isset($details['niveau_etude']) && is_string($details['niveau_etude']) ? $details['niveau_etude'] : '' }}</p>
    <p>Niveau de compétence en matière de technologie et d'informatique: {{ isset($details['niveau_compétence_matière_technologie']) && is_string($details['niveau_compétence_matière_technologie']) ? $details['niveau_compétence_matière_technologie'] : '' }}</p>
    <p>Âge: {{ isset($details['age']) && is_string($details['age']) ? $details['age'] : '' }}</p>
    <p>Niveau de diplôme: {{ isset($details['niveau_diplome']) && is_string($details['niveau_diplome']) ? $details['niveau_diplome'] : '' }}</p>
    <p>Spécialité 1: {{ isset($details['specialite1']) && is_string($details['specialite1']) ? $details['specialite1'] : '' }}</p>
    <p>Type de diplôme: {{ isset($details['type_diplome']) && is_string($details['type_diplome']) ? $details['type_diplome'] : '' }}</p>
    <p>Type de stage: {{ isset($details['type_stage']) && is_string($details['type_stage']) ? $details['type_stage'] : '' }}</p>
    <p>Durée: {{ isset($details['duree']) && is_string($details['duree']) ? $details['duree'] : '' }}</p>
    <p>Date de début: {{ isset($details['date_debut']) && is_string($details['date_debut']) ? $details['date_debut'] : '' }}</p>
    <p>Date de fin: {{ isset($details['date_fin']) && is_string($details['date_fin']) ? $details['date_fin'] : '' }}</p>
    <p>CV: <a href="{{ isset($details['cv']) ? $details['cv'] : '#' }}">Télécharger le CV</a></p>
    <p>Profiles: {{ isset($details['profiles']) && is_string($details['profiles']) ? $details['profiles'] : '' }}</p>
    <p>Comment vous nous avez trouvé: {{ isset($details['competence_options']) && is_string($details['competence_options']) ? $details['competence_options'] : '' }}</p>
    <p>CIN/Passport: {{ isset($details['cin']) && is_string($details['cin']) ? $details['cin'] : '' }}</p>
</body>
</html>
