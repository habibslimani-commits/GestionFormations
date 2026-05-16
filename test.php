<?php
$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];

foreach ($formations as $formation) {
    echo $formation . "<br>";
}
?>
<?php
$utilisateur = [
    "nom"      => "Slimani",
    "prenom"   => "Habib",
    "email"    => "Habib@email.com",
    "formation"=> "Développement Web"
];

echo "Nom : "      . $utilisateur["nom"]      . "<br>";
echo "Prénom : "   . $utilisateur["prenom"]   . "<br>";
echo "Email : "    . $utilisateur["email"]    . "<br>";
echo "Formation : ". $utilisateur["formation"]. "<br>";
?>
<?php
$formations = [
    ["nom" => "Développement Web", "duree" => "3 mois"],
    ["nom" => "Réseaux",           "duree" => "2 mois"],
    ["nom" => "Sécurité",          "duree" => "4 mois"]
];

foreach ($formations as $f) {
    echo "Formation : " . $f["nom"] . " - Durée : " . $f["duree"] . "<br>";
}
?>
<?php
$utilisateur = [
    "nom"      => "Slimani",
    "prenom"   => "Habib",
    "email"    => "Habib@email.com",
    "formation"=> "Développement Web",
    "age"      => 22
];

// Validation de l'âge
if (!is_numeric($utilisateur["age"])) {
    echo "Erreur : l'âge doit être un nombre.<br>";
} elseif ($utilisateur["age"] <= 0) {
    echo "Erreur : l'âge doit être supérieur à 0.<br>";
} else {
    // Affichage des informations
    echo "Nom : "       . $utilisateur["nom"]       . "<br>";
    echo "Prénom : "    . $utilisateur["prenom"]    . "<br>";
    echo "Email : "     . $utilisateur["email"]     . "<br>";
    echo "Formation : " . $utilisateur["formation"] . "<br>";
    echo "Âge : "       . $utilisateur["age"]       . " ans<br>";

    // Message de confirmation
    echo "<br><strong>Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . "</strong>";
}
?>
