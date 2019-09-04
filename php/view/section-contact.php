<main>
    <section class="contact">
        <h3>Formulaire de contact</h3>
        <form method="GET" action="api-json.php">
            <label>Nom :
                <input type="text" name="contact-nom" id="contact-nom" required>
            </label>
            <label>Email :
                <input type="text" name="contact-email" id="contact-email" required>
            </label>
            <label>Message :
                <textarea name="contact-message" id="message" cols="30" rows="1"></textarea>
            </label>
            <button type="submit">Envoyez votre message</button>

            <input type="hidden" name="idFormulaire" value="contact">
        </form>
    </section>
</main>
</body>

</html>
