<?php
// RECUPERE LES INFOS DU FORMULAIRE
// titre, contenu, photo
$titre = $_REQUEST["titre"] ?? "";
$contenu = $_REQUEST["contenu"] ?? "";
$photo = $_REQUEST["photo"] ?? "";
// INSERER DANS LA TABLE blog
insererLigneTable("blog", [
    "titre"     => $titre,
    "contenu"   => $contenu,
    "photo"     => $photo,
]);

$confirmation = "Article publié ($titre)";
$tabLigne = lireTableBlog();


/*
insererLigneBlog([
    "titre"     => $titre,
    "contenu"   => $contenu,
    "photo"     => $photo,
]);
*/
