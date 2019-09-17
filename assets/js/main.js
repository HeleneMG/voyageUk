//LIGHTBOX
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

//TYPE EFFECT
var typeString = [" l'Angleterre", " l'Ecosse", " le Pays de Galles", " L'Irlande du Nord"];
var i = 0;
var count = 0
var selectedText = '';
var text = '';
(function type() {
    if (count == typeString.length) {
        count = 0;
    }
    selectedText = typeString[count];
    text = selectedText.slice(0, ++i);
    document.querySelector("#titreApp").innerHTML = text;
    if (text.length === selectedText.length) {
        count++;
        i = 0;
    }
    setTimeout(type, 200);
}());

function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

//AJAX
var listeFormAjax = document.querySelectorAll("form.ajax");

listeFormAjax.forEach(function (balise) {
    balise.addEventListener('submit', function (event) {
        event.preventDefault();
        console.log('formulaire bloquÃ©');
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
                    this.querySelector(".confirmation").innerHTML = objetJS.confirmation;
                }
                if (objetJS.tabBlog) {
                    construireHtmlArticle(objetJS.tabBlog);
                }
            })
    });
})

function construireHtmlArticle(tabBlog) {
    var baliseListeBlog = document.querySelector('.listeBlog');
    if (baliseListeBlog == null)
        return;
    baliseListeBlog.innerHTML = '';
    tabBlog.forEach(function (article) {
        var codeHTML = `
            <article>
                <button class="delete"  data-id="${article.addEventListener}" id="delete-${article.id}">Supprimer</button>
                <h3>${article.titre}</h3>
                <img src="${article.photo}" alt="${article.photo}">
                <p>${article.contenu}</p>
            </article>
            `;
        baliseListeBlog.insertAdjacentHTML('beforeend', codeHTML);
    });

    var listeBoutonSupprimer = document.querySelectorAll(".listeBlog button.delete");
    listeBoutonSupprimer.forEach(function (bouton) {
        bouton.addEventListener("click", function (event) {
            console.log('tu as cliqué');
            console.log(this);
            var idLigne = this.getAttribute("data-id");
            console.log(idLigne);
            //AJAX suppression article
            var formData = new FormData();
            //remplissage en JS des infos pour traiter le form delete
            formData.append("idFormulaire", "blog-delete");
            formData.append("nomTable", "blog");
            formData.append("id", idLigne);
            fetch('api-json.php', {
                method: 'POST',
                body: formData
            })
                .then(function (reponseServeur) {
                    // je transforme la réponse du serveur en objet JS
                    return reponseServeur.json();
                })
                .then((objetJS) => {
                    // en utilisant une fonction fléchée
                    // => avantage: je garde le this d'avant
                    // cool: je peux manipuler un objet JS
                    console.log(objetJS);

                    if (objetJS.tabBlog) {
                        // la fonction va créer le HTML pour afficher les articles
                        creerHtmlBlog(objetJS.tabBlog);
                    }
                });
        })
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