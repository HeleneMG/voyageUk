<main>
    <section class="accueil">
        <img src="img/gb.png" alt="">
    </section>

    <section class="newsletter">
        <h3>Newsletter</h3>
        <form method="GET" action="api-json.php">
            <label>Nom : 
                <input type="text" name="nom" placeholder="Gérard Dupont" id="nom" required>
            </label>
            <label>Email : 
                <input type="email" name="email" placeholder="exemple@mail.me" id="email" required>
            </label>
            <button type="submit">Inscrivez-vous à la newsletter</button>
            
            <input type="hidden" name="idFormulaire" value="newsletter">
        </form>
    </section>
</main>