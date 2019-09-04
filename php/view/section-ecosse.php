<main>
            <section class="galerie">
                <h3>L'Ecosse</h3>
                <div class="container">
<?php
$tableauImage = glob("img/scotland/*.jpg");
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
                    <img src="img/scotland1.jpg" alt="L'écosse">
                </div>
            </section>
</main>