var listePhotos = document.querySelectorAll(".container img");

listePhotos.forEach((photo) => {
    photo.addEventListener('click', function () {
        var grandePhoto = document.querySelector(".grande-image img");
        grandePhoto.src = this.src;
        var lightBox = document.querySelector(".grande-image");
        lightBox.classList.add('montrer');
    });
});

var lightBox = document.querySelector(".grande-image");
if (lightBox != null) {
    lightBox.addEventListener('click', function () {
        lightBox.classList.remove('montrer');
    });
}
else { };

//APPARITION LETTRES
var chaine = " le Royaume-Uni";
var nb_car = chaine.length;
var tableau = chaine.split("");
texte = new Array;
var txt = '';
var nb_msg = nb_car - 1;
for (i = 0; i < nb_car; i++) {
    texte[i] = txt + tableau[i];
    var txt = texte[i];
}

actual_texte = 0;
function changeMessage() {
    document.querySelector('#titreApp').innerHTML = texte[actual_texte];
    actual_texte++;
    if (actual_texte >= texte.length)
        actual_texte = nb_msg;
}
if (document.querySelector)
    setInterval("changeMessage()", 100)

//AJAX
var listeFormAjax = document.querySelectorAll("form.ajax");

listeFormAjax.forEach(function (balise) {
    balise.addEventListener('submit', function (event) {
        event.preventDefault();
        console.log('formulaire bloqué');
        var formData = new FormData(this);
        fetch("api-json.php", {
            method: "POST",
            body: formData
        })
            .then(function (reponseServeur) {
                return reponseServeur.json();
            })
            .then(function (objetJS) {
                console.log(objetJS);
                if (objetJS.confirmation) {
                    var baliseConfirmation = balise.querySelector('.confirmation');
                    baliseConfirmation.innerHTML = objetJS.confirmation;
                }
                if (objetJS.tabArticle) {
                    construireHtmlArticle(objetJS.tabArticle);
                }
            })
    });
})

function construireHtmlArticle(tabArticle) {
    var baliseListeBlog = document.querySelector('.listeBlog');
    if(baliseListeBlog == null)
    return;
    baliseListeBlog.innerHTML = '';
    tabArticle.forEach(function (article) {
        var codeHTML = `
            <article>
                <h3>${article.titre}</h3>
                <img src="${article.photo}" alt="${article.photo}">
                <p>${article.contenu}</p>
            </article>
            `;
        baliseListeBlog.insertAdjacentHTML('beforeend', codeHTML);
    })
}


/*DROPDOWN CLICK
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
*/