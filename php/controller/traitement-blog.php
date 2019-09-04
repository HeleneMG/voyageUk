<?php

// ON VA RECUPERER LE titre ET LE contenu
// ET ON VA ENREGISTRER CHAQUE ARTICLE DANS SON FICHIER
// php/model/article-20190904-102034.txt 

$titre    = $_REQUEST["titre"] ?? "";
$contenu  = $_REQUEST["contenu"] ?? "";
$photo    = $_REQUEST["photo"] ?? "";

$ligne = 
<<<CODETEXT

<h3>$titre</h3>
<img src="$photo">
<p>$contenu</p>

CODETEXT;

// JE VAIS CREER UN FICHIER DIFFERENT POUR CHAQUE ARTICLE
// php/model/contact-20190904-100823.txt
// https://www.php.net/manual/fr/function.date.php

$date = date("Ymd-His");
$nomFichier = "php/model/article-$date.txt";
file_put_contents($nomFichier, $ligne, FILE_APPEND);

// envoyer un email
@mail("webmaster@monsite.fr", "nouveau article", $ligne);

// message à afficher au visiteur
$confirmation = "votre article est publié ($titre).";

