<section>
    <h3>Nouvel Article</h3>

    <form method="GET" action="api-json.php">
        <label>
            Titre
            <input type="text" name="titre" required placeholder="Mon Article">
        </label>
        <label>
            Contenu
            <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
        </label>
        <button type="submit">Publication</button>

        <div class="confirmation"></div>

        <input type="hidden" name="idFormulaire" value="blog">
    </form>
</section>