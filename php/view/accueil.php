<div id="accueil">
    <section class="background">
            <h2 class="titreApp">Visitez</br><span id="titreApp"></span></h2>
    </section>

    <section class="newsletter">
        <h3>Newsletter</h3>
        <form class="ajax" method="GET" action="api-json.php">
            <label>Nom
                <input type="text" name="nom" placeholder="Stéphanie de Monaco" required>
            </label>

            <label>Email
                <input type="email" name="email" placeholder="stef2monac@mail.me" required>
            </label>
            <button type="submit">Inscription à la newsletter</button>

            <div class="confirmation"></div>

            <input type="hidden" name="idFormulaire" value="newsletter">
        </form>
    </section>

    <section>
        <div class="listeBlog"></div>
    </section>
</div>
