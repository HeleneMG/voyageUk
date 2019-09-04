<main>

            <section class="galerie">
                <h3>L'Angleterre</h3>
                <div class="container">

<?php
$tableauImage = glob("img/england/*.jpg");
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
                    <img src="img/england/england1.jpg" alt="L'écosse">
                </div>
            </section>
</main>