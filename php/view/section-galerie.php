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

    <h3>L'Ecosse</h3>
    <div class="container">
        <?php
$tableauImage = glob("assets/img/scotland/*.jpg");
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
        <img src="assets/img/scotland1.jpg" alt="L'écosse">
    </div>

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

    <h3>L'Irlande du Nord</h3>
    <div class="container">
        <?php
$tableauImage = glob("assets/img/ireland/*.jpg");
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
        <img src="assets/img/ireland/ireland1.jpg" alt="L'écosse">
    </div>
</section>
