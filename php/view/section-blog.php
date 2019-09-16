<section class="articles">
    <h3>Les Derniers Articles</h3>
    <div class="listeArticle">
        <?php

    require "php/mes-fonctions.php";

    // LA FONCTION QUE JE VEUX AVOIR
    $tabLigne = lireTableBlog();
    // JE PARCOURS TOUS LES ELEMENTS DU TABLEAU
    foreach($tabLigne as $ligneAsso)
    {
        $titre      = $ligneAsso["titre"];
        $contenu    = $ligneAsso["contenu"];
        $photo      = $ligneAsso["photo"];
        // JE PEUX CONSTRUIRE LE CODE HTML POUR L'ARTICLE
        echo
<<<CODEHTML
        <article>
            <h3>$titre</h3>
            <img src="$photo" alt="$photo">
            <p>$contenu</p>
        </article>
CODEHTML;
    }
?>
    </div>
</section>
