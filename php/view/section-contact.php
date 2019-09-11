<section class="contact">
    <h3>FORMULAIRE DE CONTACT</h3>
    <form method="GET" action="api-json.php">
        <label>Nom
            <input type="text" name="contact-nom" id="contact-nom" placeholder="Jon Snow" required>
        </label>
        <label>Email
            <input type="text" name="contact-email" id="contact-email" placeholder="iknownothing@mail.me" required>
        </label>
        <label>Message
            <textarea name="contact-message" id="message" cols="65" rows="10" placeholder="Winter is coming"></textarea>
        </label>
        <button type="submit">Envoyez votre message</button>

        <div class="confirmation"></div>

        <input type="hidden" name="idFormulaire" value="contact">
    </form>
</section>
</body>

</html>
