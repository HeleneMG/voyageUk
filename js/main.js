var listePhotos = document.querySelectorAll(".container img");

listePhotos.forEach((photo) => {
    photo.addEventListener('click', function () {
        var grandePhoto = document.querySelector(".grande-image img");
        grandePhoto.src = this.src;

        // IL FAUT AFFICHER LA LIGHTBOX
        var lightBox = document.querySelector(".grande-image");
        // IL FAUT CHANGER LE display A block
        // lightBox.style.display = 'block';
        // IL FAUT AJOUTER LA CLASSE montrer A LA BALISE
        lightBox.classList.add('montrer');
    });
});

// IL FAUT POUVOIR CACHER LA LIGHTBOX SI ON CLIQUE DESSUS
var lightBox = document.querySelector(".grande-image");
// PEUT-ETRE QUE LA BALISE N'EXISTE PAS
if (lightBox != null) {
    // LA BALISE EXISTE
    lightBox.addEventListener('click', function () {
        // IL FAUT CACHER LA LIGHTBOX
        lightBox.classList.remove('montrer');
    });
}
else {};

//DROPDOWN CLICK
var dropdown = document.querySelector(".dropdown a");

dropdown.addEventListener("click", function (event) {
    // on va bloquer le comportement normal
    event.preventDefault();

    contenu = document.querySelector(".dropdown-content");

    if (contenu.classList.contains("cache")) {
        contenu.classList.remove("cache");
        console.log("1");
    }
    else {
        contenu.classList.add("cache");
        console.log("2");
    }
});