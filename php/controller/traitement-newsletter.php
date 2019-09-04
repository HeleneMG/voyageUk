<?php
$nom    = $_REQUEST["nom"] ?? "";
$email  = $_REQUEST["email"] ?? "";

$ligne = "$nom,$email\n";
file_put_contents("php/model/newsletter.csv", $ligne, FILE_APPEND);

// envoyer un email
@mail("webmaster@monsite.fr", "nouvelle inscription newsletter", $ligne);

// message à afficher au visiteur
$confirmation = "Merci $nom, votre inscription a bien été enregistrée";
