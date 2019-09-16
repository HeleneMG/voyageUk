<?php
        $nom = $_REQUEST["nom"] ?? "";
        $email = $_REQUEST["email"] ?? "";
        $message = $_REQUEST["message"] ?? "";
        // UNE FOIS QU'ON A CETTE FONCTION A NOTRE DISPOSITION
        // POUR L'UTILISER, ON VA APPELER LA FONCTION
        require "php/mes-fonctions.php";

        insererLigneTable("contact", [
                "nom" => $nom,
                "email" => $email,
                "message" => $message
                ]);

$ligne =
<<<CODETEXT
-------------
Nom: $nom
Email: $email
Message:
$message
CODETEXT;

@mail("webmaster@monsite.fr", "nouveau message contact", $ligne);
$confirmation = "Merci de votre message $nom";
