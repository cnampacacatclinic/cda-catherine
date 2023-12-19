// Obtient les éléments de classe 'supp'
var supprimerButtons = document.querySelectorAll('.supp');

// Pour chaque élément de la classe 'supp'
supprimerButtons.forEach(function (supprimerButton) {
    supprimerButton.addEventListener('click', function (event) {
        event.preventDefault(); // On empêche le comportement par défaut du lien

        // On affiche la modale de confirmation
        var modaleSupp = new bootstrap.Modal(document.getElementById('modaleSupp'));
        modaleSupp.show();

        // Sélectionnez le bouton avec l'ID #confirmDelete
        var confirmButton = document.getElementById('confirmDelete');

        // On obtient l'ID
        var articleId = supprimerButton.getAttribute('data-article-id');

        // On ajoute un événement au bouton de confirmation
        confirmButton.addEventListener('click', function () {
                        
            // on créait un objet XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // on configure la requête
            xhr.open('GET', '?supp=' +articleId, true);

            // on envoie la requête
            xhr.send();

            // On cache la modale
            modaleSupp.hide();

            // On rafraichit la page pour afficher les modifications des données en tables
            location.reload();
        });
    });
});