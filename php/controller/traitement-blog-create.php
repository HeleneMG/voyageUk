  <?php

$titre              = $_REQUEST["titre"] ?? "";
$contenu            = $_REQUEST["contenu"] ?? "";
$photo              = $_REQUEST["photo"] ?? "";
$datePublication    = $_REQUEST["datePublication"] ?? "";
$categorie          = $_REQUEST["categorie"] ?? "";

require_once "php/mes-fonctions.php";

insererLigneTable("blog", [
    "titre"             => $titre,
    "contenu"           => $contenu,
    "photo"             => $photo,
    "datePublication"   => $datePublication,
    "categorie"         => $categorie,
]);

$confirmation = "article publi� ($titre)";
// en plus, on va fournir la liste des articles publi�s
$tabBlog = lireTable("blog");
// je rajoute le tableau dans la r�ponse � envoyer au navigateur
$tabAssoJson["tabBlog"] = $tabBlog; 