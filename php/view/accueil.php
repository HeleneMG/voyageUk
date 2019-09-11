<div id="accueil">
    <section class="accueil">
        <!--<img src="assets/img/gb.png" alt="">-->
    </section>
    <section class="newsletter">
        <h3>Newsletter</h3>
        <form method="GET" action="api-json.php">
            <label>Nom :
                <input type="text" name="nom" placeholder="Stéphanie de Monaco" id="nom" required>
            </label>

            <label>Email :
                <input type="email" name="email" placeholder="stefofmonaco@mail.me" id="email" required>
            </label>
            <button type="submit">Inscription à la newsletter</button>

            <div class="confirmation"></div>

            <input type="hidden" name="idFormulaire" value="newsletter">
        </form>
    </section>
</div>