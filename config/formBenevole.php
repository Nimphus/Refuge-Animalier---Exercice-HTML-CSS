<?php

$prenom=$_POST["sPrenomBenevole"];
$nom=$_POST["sNomBenevole"];
$email=$_POST["sEmailBenevole"];

// Problème récupération checkbox (Récupérer données dans un tableau ?)
$jourDispo=$_POST["sJourDispoBenevole"]


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récupération données Bénévole</title>
</head>
<body>

    <span>Prénom : <?=$prenom?>
    </span>
    <br>

    <span>Nom : <?=$nom?>
    </span>
    <br>

    <span>Email : <?=$email?>
    </span>
    <br>

    <span>Jours de disponibilité : <?=$jourDispo?>
    </span>

</body>
</html>