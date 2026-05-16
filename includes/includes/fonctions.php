<?php
function afficherErreur($erreur) {
if (!empty($erreur)) {
return "<div style='color:red;'>$erreur</div>";
}
}
function afficherSucces($nom, $prenom, $email) {
return "<div style='color:green;'>
Formulaire valide ✔<br>
Nom : $nom <br>
Prénom : $prenom <br>
Email : $email
</div>";

}
?>
<?php
require "includes/fonctions.php";
require "includes/validation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom = trim($_POST["nom"]);
$prenom = trim($_POST["prenom"]);
$email = trim($_POST["email"]);
// Validation
$erreur = validerFormulaire($nom, $prenom, $email);
// Affichage
if (!empty($erreur)) {
echo afficherErreur($erreur);
} else {
echo afficherSucces($nom, $prenom, $email);
}
}
?>