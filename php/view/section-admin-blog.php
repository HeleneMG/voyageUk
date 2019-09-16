<div class="background">
    <div class="gradient">
        <section class="blog">
            <section>
                <h3>Nouvel article</h3>
                <!-- formulaire de création d'article de blog -->
                <form action="api-json.php" method="POST">
                    <label>
                        <p>titre</p>
                        <input type="text" name="titre" required placeholder="entrez le titre">
                    </label>
                    <label>
                        <p>contenu</p>
                        <textarea name="contenu" cols="80" rows="10" required placeholder="entrez le contenu"></textarea>
                    </label>
                    <label>
                        <p>photo</p>
                        <input type="text" name="photo" required placeholder="choisissez la photo" value="assets/images/photo1.jpg">
                    </label>
                    <button type="submit">publier votre article</button>
                    <div class="confirmation">
                    </div>
                    <input type="hidden" name="idFormulaire" value="blog-create">
                </form>
            </section>
            <section>
                <h3>Modifier un article</h3>
                <!-- formulaire de création d'article de blog -->
                <form action="api-json.php" method="POST">
                    <label>
                        <p>id</p>
                        <input type="text" name="id" required placeholder="entrez id">
                    </label>
                    <label>
                        <p>titre</p>
                        <input type="text" name="titre" required placeholder="entrez le titre">
                    </label>
                    <label>
                        <p>contenu</p>
                        <textarea name="contenu" cols="80" rows="10" required placeholder="entrez le contenu"></textarea>
                    </label>
                    <label>
                        <p>photo</p>
                        <input type="text" name="photo" required placeholder="choisissez la photo" value="assets/images/photo1.jpg">
                    </label>
                    <button type="submit">modifier votre article</button>
                    <div class="confirmation">
                    </div>
                    <input type="hidden" name="idFormulaire" value="blog-update">
                </form>
            </section>
            <!-- formulaire de suppression d'article de blog -->
            <section>
                <h3>Supprimer un article</h3>
                <form action="api-json.php" method="POST">
                    <input type="text" name="nomTable" required placeholder="entrez le nom de la table">
                    <input type="number" name="id" required placeholder="entrez id de la ligne">
                    <button type="submit">supprimer la ligne</button>
                    <div class="confirm"></div>
                    <input type="hidden" name="idFormulaire" value="blog-delete">
                </form>
            </section>
            <section>
                <h3>Articles Précédents</h3>
                <div class="listeBlog"></div>
            </section>
        </section>
    </div>
</div>
