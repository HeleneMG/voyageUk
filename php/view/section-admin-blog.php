<div class="background">
    <div class="gradient">
        <section class="blog">
            <h3>NOUVEL ARTICLE</h3>

            <form class="ajax" method="GET" action="api-json.php">
                <label>
                    Titre
                    <input type="text" name="titre" required placeholder="Coucou je suis un titre">
                </label>
                <label>
                    Contenu
                    <textarea name="contenu" cols="80" rows="10" required placeholder="Coucou je suis un contenu"></textarea>
                </label>
                <button type="submit">Publication</button>

                <div class="confirmation"></div>

                <input type="hidden" name="idFormulaire" value="blog">
            </form>
        </section>

        <section>
            <h3>Articles Précédents</h3>
            <div class="listeBlog"></div>
        </section>
    </div>
</div>
