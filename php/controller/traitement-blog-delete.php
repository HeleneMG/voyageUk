<?php

$id              = $_REQUEST["id"] ?? "";
$nomTable        = $_REQUEST["nomTable"] ?? "";

require_once "php/mes-fonctions.php";

supprimerLigne($nomTable, $id);

$confirmation = "article supprim� ($id)";

$tabBlog = lireTable("blog");

$tabAssoJson["tabBlog"] = $tabBlog; 