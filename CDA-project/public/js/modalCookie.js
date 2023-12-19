function handleCookieButtonClick(action) {
    // on créait un objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // on configure la requête
    xhr.open('GET', '?cookie=' + action, true);

    // on envoie la requête
    xhr.send();

    // on cache la modal
    document.getElementById('modaleCookie').style.display = 'none';
}

// On ajoute un écouteur d'événements pour le bouton "Ok"
document.getElementById('cookieButton').addEventListener('click', function() {
    handleCookieButtonClick('ok');
});

// On ajoute un écouteur d'événements pour le bouton "No"
document.getElementById('noCookieButton').addEventListener('click', function () {
    handleCookieButtonClick('no');
});

//JQuery pour cacher la modal si les cookies existe
$(document).ready(function(){
    // Si les cookies n'existent pas
    if (document.cookie.indexOf('cookieTest') === -1 && document.cookie.indexOf('cookieSecure') === -1) {
        // On affiche la modal
        $('#modaleCookie').modal('show');
    }
});