<?php
$nom    = $_REQUEST["contact-nom"] ?? "";
$email  = $_REQUEST["contact-email"] ?? "";
$message = $_REQUEST["contact-message"] ?? "";

$ligne = 
<<<CODETEXT
-------------
Nom: $nom
Email: $email
Message:
$message

CODETEXT;

// JE VAIS CREER UN FICHIER DIFFERENT POUR CHAQUE MESSAGE
// php/model/contact-20190904-100823.txt
// https://www.php.net/manual/fr/function.date.php
$date = date("Ymd-His");
$nomFichier = "php/model/contact-$date.txt";
file_put_contents($nomFichier, $ligne, FILE_APPEND);

// envoyer un email
@mail("webmaster@monsite.fr", "nouveau message contact", $ligne);

// message à afficher au visiteur
$confirmation = "merci $nom pour votre message.";

