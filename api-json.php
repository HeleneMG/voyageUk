<?php
// CHARGER MES FONCTIONS POUR POUVOIR LES UTILISER
require "php/mes-fonctions.php";
// CE FICHIER VA CENTRALISER TOUS LES FORMULAIRES DU FRONT
$idFormulaire = $_REQUEST["idFormulaire"] ?? "";
// SI IL Y UNE VALEUR DANS $idFormulaire
// ALORS IL Y A UN FORMULAIRE A TRAITER
if ($idFormulaire != "")
{
    // IL FAUT DISTINGUER LE FORMULAIRE A TRAITER
    if ($idFormulaire == "contact")
    {
        require "php/controller/traitement-contact.php";
    }
    if ($idFormulaire == "blog")
    {
        require "php/controller/traitement-blog.php";
    }
    if($idFormulaire == "newsletter")
    {
        require "php/controller/traitement-newsletter.php";
    }
}

$tabAssoJson = [
    "cle1"   => "valeur1",
    "cle2"   => "valeur12",
    "confirmation" => $confirmation ?? "",
    "tabArticle" => $tabLigne ?? [],
];
$texteJson = json_encode($tabAssoJson, JSON_PRETTY_PRINT);
// afficher le texte json
echo $texteJson;
