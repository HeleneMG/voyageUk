    <main>
        <section class="contact">
            <h3>Nouvel article</h3>
            <form method="GET" action="api-json.php">
                <label>Titre 
                    <input type="text" name="titre" id="titre" required>
                </label>

                <label>Article 
                    <textarea name="article" id="article" cols="30" rows="10"></textarea>
                </label>
                
                <button type="submit">Publication</button>

                <input type="hidden" name="idFormulaire" value="blog">
            </form>
        </section>
    </main>