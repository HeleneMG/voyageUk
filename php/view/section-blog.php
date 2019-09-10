<section>
    <h3>Blog</h3>
    <div class="listeBlog">
        <?php
// JE VEUX CREER UNE BALISE article POUR CHAQUE ARTICLE
// IL FAUT QUE JE RECUPERE LA LISTE DES ARTICLES
// ET POUR CHAQUE ARTICLE, JE CREE UNE BALISE article
// https://www.php.net/manual/fr/function.glob.php
$tabFichierArticle = glob("php/model/article-*.txt");

// ON INVERSE L'ORDRE DES ELEMENTS
// POUR AVOIR EN PREMIER LE PLUS RECENT
// https://www.php.net/manual/fr/function.array-reverse.php
$tabFichierArticle = array_reverse($tabFichierArticle);

// PARCOURIR LE TABLEAU
foreach($tabFichierArticle as $fichier)
{
    // LIRE LE CONTENU DU FICHIER
    // https://www.php.net/manual/fr/function.file-get-contents.php
    $contenuFichier = file_get_contents($fichier);
    echo
<<<CODEHTML
<article>
$contenuFichier
</article>
CODEHTML;


}
?>
    </div>

</section>
