<section class="galerie">
    <h3>L'Angleterre</h3>
    <div class="container">

        <?php
$tableauImage = glob("assets/img/england/*.jpg");
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
        <img src="assets/img/england/england1.jpg" alt="L'écosse">
    </div>
</section>
