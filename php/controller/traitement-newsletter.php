<?php
        // IL FAUT TRAITER LE FORMULAIRE contact
        // RECUPERER LES INFOS
        $nom = $_REQUEST["nom"] ?? "";
        $email = $_REQUEST["email"] ?? "";
        // UNE FOIS QU'ON A CETTE FONCTION A NOTRE DISPOSITION
        // POUR L'UTILISER, ON VA APPELER LA FONCTION
        insererLigneTable("newsletter", [
                "nom" => $nom,
                "email" => $email
            ]);

        $ligne =
<<<CODETEXT
-------------
Nom: $nom
Email: $email

CODETEXT;

@mail("webmaster@monsite.fr", "nouvel abonnement newsletter", $ligne);
$confirmation = "Merci $nom, votre abonnement a bien été pris en compte";
