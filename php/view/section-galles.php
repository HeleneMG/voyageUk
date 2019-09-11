<section class="galerie">
    <h3>Le Pays de Galles</h3>
    <div class="container">
        <?php
$tableauImage = glob("assets/img/wales/*.jpg");
foreach($tableauImage as $image)
{
    echo
<<<BALISEHTML
    <img src="$image" alt="$image">
BALISEHTML;
}
?>
    </div>
    <div class="grande-image">
        <img src="assets/img/wales/wales1.jpg" alt="L'écosse">
    </div>
</section>
