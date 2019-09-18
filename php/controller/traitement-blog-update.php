<?php

$id                 = $_REQUEST["id"] ?? "";
$titre              = $_REQUEST["titre"] ?? "";
$contenu            = $_REQUEST["contenu"] ?? "";
$photo              = $_REQUEST["photo"] ?? "";
$datePublication    = $_REQUEST["datePublication"] ?? "";
$categorie          = $_REQUEST["categorie"] ?? "";

require_once "php/mes-fonctions.php";

modifierLigne("blog", $id, [
    "titre"             => $titre,
    "contenu"           => $contenu,
    "photo"             => $photo,
    "datePublication"   => $datePublication,
    "categorie"         => $categorie,
]);

$confirmation = "article modifi� ($id: $titre)";

$tabBlog = lireTable("blog");

$tabAssoJson["tabBlog"] = $tabBlog; 