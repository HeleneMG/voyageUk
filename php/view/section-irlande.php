<main>
            <section class="galerie">
                <h3>L'Irlande du Nord</h3>
                <div class="container">
<?php
$tableauImage = glob("img/ireland/*.jpg");
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
                    <img src="img/ireland/ireland1.jpg" alt="L'écosse">
                </div>
            </section>
</main>