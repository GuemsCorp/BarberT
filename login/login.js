const urlParams = new URLSearchParams(window.location.search); // Je récupère les paramètres de mon url

//=: Si j'ai le paramètre logout dans mon url alors
if (urlParams.get("logout")) {
    // Je fais un appel AJAX pour la déconnexion
    $.ajax({
        url: "logout.php", 
        type: "GET", // Type de méthode de requête HTTP
        dataType: "json", // Type de réponse attendue
        success: () => {
            //! Je supprime l'utilisateur de mon localStorage car il s'est déconnecté
            localStorage.removeItem("user");
        }
    });
}


$("form").submit(event => { // A la soumission du formulaire
    event.preventDefault(); // J'empêche le comportement par défaut de l'événement. Ici la soumission du formulaire recharge la page

    $.ajax({
        url: "login.php", 
        type: "POST", // Type de méthode de requête HTTP
        dataType: "json",
        data: { 
            email: $("#email").val(),
            pwd: $("#password").val()
        },
        success: (res) => {
            // Si la réponse est un succès alors
            if (res.success){
                localStorage.setItem("user", JSON.stringify(res.user)); // J'ajoute mon utilisateur dans mon localStorage
                window.location.replace("index.php"); // Je redirige vers la page de connexion
            }
            else alert(res.error); // J'affiche une boite de dialogue avec l'erreur //
        }
    });
});