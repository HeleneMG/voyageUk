<section>
    <h3>FORMULAIRE DE CREATION D'ARTICLE DE BLOG</h3>
    <!-- ON VA AJOUTER UN FORMULAIRE DE CONTACT -->
    <form method="GET" action="api-json.php">
        <label>
            Titre
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            Contenu
            <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
        </label>
        <button type="submit">PUBLIER VOTRE ARTICLE</button>
        <div class="confirmation">
            <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- PARTIE TECHNIQUE -->
        <input type="hidden" name="idFormulaire" value="blog">
    </form>
</section>