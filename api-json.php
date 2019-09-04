<?php
// RECUPERER DES INFORMATIONS DE FORMULAIRE
$idFormulaire = $_REQUEST["idFormulaire"] ?? "";

// SCENARIO DU FORMULAIRE newsletter
if ($idFormulaire == "newsletter")
{
    require "php/controller/traitement-newsletter.php";
}

// SCENARIO DU FORMULAIRE contact
if ($idFormulaire == "contact")
{
    require "php/controller/traitement-contact.php";
}

// SCENARIO DU FORMULAIRE blog
if ($idFormulaire == "blog")
{
    require "php/controller/traitement-blog.php";
}

// TABLEAU ASSOCIATIF PHP
// JE PEUX UTILISER LA FONCTION json_encode QUI VA PRODUIRE LE TEXTE JSON CORRESPONDANT
// TRADUCTEUR PHP => TEXTE JSON
// https://www.php.net/manual/fr/function.json-encode.php
$tableauAssociatif = [
    "date"  => date("Y-m-d H:i:s"),
    "confirmation" => $confirmation ?? "",
];

$texteJSON = json_encode($tableauAssociatif, JSON_PRETTY_PRINT);

echo $texteJSON;

?>
