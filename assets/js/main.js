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
    setTimeout(type, 100);
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