<?php
$nom = "Slimani";
$prenom = "Habib";
$email = "Habib.slimani@email.com";
$age = 21;
$ville = "bizert";
$formation = "Licence en Gtic";
echo "<p>Bienvenue $prenom dans la formation $formation</p>";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil utilisateur</title>
<link rel="stylesheet" href="css:/style.css">
</head>
<body>
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?= $nom ?></p>
<p><strong>Prenom :</strong> <?= $prenom ?></p>
<p><strong>Email :</strong> <?= $email ?></p>
<p><strong>Âge :</strong> <?= $age; ?> ans</p>
<p><strong>Ville :</strong> <?= $ville; ?></p>
<p><strong>Formation :</strong> <?= $formation; ?></p>
</body>
</html>
<p>Date : <?= date("H:i:s") ?></p>