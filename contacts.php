<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.cdnfonts.com/css/mauikea-demo');
    </style>
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contacts</title>
</head>
<body>
        <!------------------------------------------- NAV BAR ------------------------->
<?php
    include("./fonctions/header.php");
?>       
<!------------------------------------------- FORMULAIRE ------------------------->
    <main>
        <div class="TitreContact">
            <h2>Contacts</h2>
        </div>
        <div class="ReseauxContact">
            <a href="https://www.instagram.com/barber_thy/"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="#"><i class="fa-brands fa-snapchat-square"></i></a>
        </div>
        <!-- L'attribut method spécifie comment envoyer les données du formulaire -->
        <!-- les données du formulaire sont envoyées à la page spécifiée dans l'attribut action -->
        <!--   Les données de formulaire peuvent être envoyées en tant que variables d'URL 
        (avec method="get" ) ou en tant que transaction HTTP post (avec method="post" )     -->
        <div>
            <form method="POST">  
                <input type="text" class="feedback-input" placeholder="Nom" name="name" required/>   
                <input type="text" class="feedback-input" placeholder="Email" name="Email" required/>   
                <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                <button type="submit" class="btn">ENVOYER</button> 
            </form>
        </div>
        <!--------------------------- SECTION DEUX ------------------>

    <section id="SectionDeux">
        <div class="SectionDeuxContainer">
            <h1>Barber Thy</h1>
            <h3>Faut qu'tu viennes pour le voir j'peux pas t'expliquer...</h3>
        </div>
    </section>
        <!--------------------------- Iframe ------------------>

        <div class="coordonnees">
            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10480.469574116534!2d2.2653736!3d48.9512505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6675ccb8aacd5%3A0x6a3a273a600a4e57!2sKings%20Barbershop!5e0!3m2!1sfr!2sfr!4v1684638806817!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="infos">
                <p>BARBER-THY</p>
                <a href="#"><i class="fa-brands fa-snapchat"></i></a>
                <a href="https://www.instagram.com/barber_thy/"><i class="fa-brands fa-instagram"></i></a>
                <p><a href="tel:+">01 47 99 24 22</a></p>
                <p>lundi au dimanche de 10h30 à 19h30,</p>
                <p>78 avenue Stalingrad,95100 Argenteuil</p> 
            </div>
        </div>
    </main>    
<!----------------------------------- FOOTER ------------------------------------------------>
<?php
    include("./fonctions/footer.php");
?>    
</body>
</html>