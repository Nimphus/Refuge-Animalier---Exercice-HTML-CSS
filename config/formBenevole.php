<?php

// $prenom($_POST["sPrenomBenevole"])
// $nom($_POST["sNomBenevole"])
// $email($_POST["sEmailBenevole"])
// $jourDispo($_POST["sJourDispoBenevole"])


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récupération données Bénévole</title>
</head>
<body>

    <span>Prénom : <?=$_POST["sPrenomBenevole"]?>
    </span>
    <br>

    <span>Nom : <?=$_POST["sNomBenevole"]?>
    </span>
    <br>

    <span>Email : <?=$_POST["sEmailBenevole"]?>
    </span>
    <br>

    <span>Jours de disponibilité : <?=$_POST["sJourDispoBenevole"]?>
    </span>

</body>
</html>