<?php
require_once "../includes/connexion.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
</head>
<body>
<a href="indexhebergement.php">retour</a>
<form action="doaddhebergement.php" method="post">
    <label class="nom">Nom</label>
    <input type="text" value="" name="nom"><br>

    <label class="personnes">Personnes</label>
    <input type="text" value="" name="personnes"><br>

    <label class="formule">Formule</label>
    <input type="text" value="" name="formule"><br>

    <label class="datedebut">Date du début</label>
    <input type="date" value="" name="datedebut"><br>

    <label class="datefin">Date de fin</label>
    <input type="date" value="" name="datefin"><br>

    <label class="cbnum">Carte Bleu</label>
    <input type="text" value="" name="cbnum"><br>

    <label class="cryptograme">Cryptogramme</label>
    <input type="text" value="" name="cryptograme"><br>

    <input type="submit" value="Ajouter">
</form>
</body>
</html>
