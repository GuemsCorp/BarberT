<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.cdnfonts.com/css/mauikea-demo');
    </style>
    <link rel="stylesheet" href="../Assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contacts</title>
</head>
<body>
        <!------------------------------------------- NAV BAR ------------------------->
<?php
    include("../fonctions/header.php");
?>       
<!------------------------------------------- FORMULAIRE ------------------------->
    <main>
        <div class="TitreContact">
            <h2>Connexion</h2>
        </div>
        <!-- L'attribut method spécifie comment envoyer les données du formulaire -->
        <!-- les données du formulaire sont envoyées à la page spécifiée dans l'attribut action -->
        <!--   Les données de formulaire peuvent être envoyées en tant que variables d'URL 
        (avec method="get" ) ou en tant que transaction HTTP post (avec method="post" )     -->
        <div>
            <form method="POST">  
                <input type="email" class="feedback-input" id="email" placeholder="Email" name="Email" required />   
                <input type="password" class="feedback-input" id="password" placeholder="Mot de passe" name="password" required />   
                <button type="submit" class="btn">ENVOYER</button> 
                <p><a href="../register/register.html">S'inscrire</a></p>
            </form>
        </div>
<!----------------------------------- FOOTER ------------------------------------------------>
<?php
    include("./fonctions/footer.php");
?>    
</body>
</html>