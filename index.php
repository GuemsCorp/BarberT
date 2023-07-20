<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Site de salon de Coiffure dans lequel vous trouverez nos coiffeurs, modèles, coiffures, prix, adresse, horaires d'ouverture">
    <meta name="Keywords" content="BarbierArgenteuil, CoiffureArgenteuil, CoiffeurAfro95Argenteuil,BarberShopArgenteuil,TeintureArgenteuil, TeintureHommeBlack, CoupeCourteHomme,TressePlaquéeHomme">
    <meta name="Author" content="GCorp's">
    <meta name="Copyright" content="Barber Thy 2023">
    <meta name="Content-Language" content="fr">
    <meta name="Subject" content="Site vitrine">
    <meta name="Publisher" content="GCorp's">
    <meta name="Identifier-url" content="barberthy.epizy.com">

    <meta name="google-site-verification" content="WwTQi2IiEP-Ga7F1nRMjuwFjnH2FgtN3JRTXT_fS2PY" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Barber Thy Project</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/mauikea-demo');
    </style>
    <link rel="stylesheet" href="./Assets/CSS/style.css">
    <link rel="shortcut icon" href="./Assets/Images/logo-removebg-preview.png" type="image/x-icon">
</head>
<body>
    <!------------------------------------------- NAV BAR ------------------------->

    <header id="headerHome">
    <nav id="Navbar">
            <!-- LOGO Nav -->
            <a href="index.html" class="LogoNav">
                <img src="./Assets/Images/logo-removebg-preview.png" width="100" alt="LogoNav">
            </a>
        
            <!-- Menu Burger -->
            <div class="MenuBurger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <!-- Menu du site -->
            
            <div class="NavMenu cacher">
                <a href="index.php">Accueil</a>
                <a href="galerie.php">Galerie</a>
                <a href="price.php">Prix</a>
                <a href="reservations.php">Réservations</a>
                <a href="contacts.php">Contacts</a>
            </div>
            <div class="NavMenu cacher">
                <a href="./login/login.html">Connexion/Inscription</a>
            </div>
            
        </nav>
        <div class="TextheaderHome">
            <h1>Barber Thy</h1> 
        </div>
    </header>
    
<main>
    <!-------------------------- SECTION UNE ------------------>
    <section id="SectionUne">
        <h1>Nos Coiffeurs</h1>

        <div class="SectionUneContainer">
            <div class="DivSectionUne">
                <img src="./Assets/Images/Blacko.jpg" width="250" height="300" alt="Blacko">
                <h3 class="NomCoiffeur"> Blacko Barber</h3>
            </div>
            <div class="DivSectionUne">
                <img src="./Assets/Images/thy.jpg" width="250" height="300" alt="Thy">
                <h3 class="NomCoiffeur"> Barber Thy</h3>
            </div>
            <div class="DivSectionUne">
                <img src="./Assets/Images/moussa.jpeg" width="250" height="300" alt="Moussa">
                <h3 class="NomCoiffeur"> Moussa</h3>
            </div>
            <div class="DivSectionUne">
                <a href="#">
                    <img src="./Assets/Images/coiffeur.jpeg" width="250" height="300" alt="Sylvain">
                    <h3 class="NomCoiffeur"> Sylvain</h3>
                </a>
            </div>
        </div>
    </section> 

<!--------------------------- SECTION DEUX ------------------>
    <section id="SectionDeux">
        <div class="SectionDeuxContainer">
            <h1>Barber Thy</h1>
            <h3>Faut qu'tu viennes pour le voir j'peux pas t'expliquer...</h3>
        </div>
    </section>

<!-------------------------- SECTION TROIS ------------------>

        <section id="SectionTrois">
            <h1>Quelques Modèles</h1>

            <div class="SectionTroisContainer">
                <div class="DivSectionTrois">
                    <img src="./Assets/Images/coiffemme.jpg" width="250" height="300" alt="Coiffure femme">
                </div>
                <div class="DivSectionTrois">
                    <img src="./Assets/Images/coifftress.jpg" width="250" height="300" alt="Coiffure Tresses">
                </div>
                <div class="DivSectionTrois">
                    <img src="./Assets/Images/coiff1.jpg" width="250" height="300" alt="Dégrader">
                </div>
                <div class="DivSectionTrois">
                    <img src="./Assets/Images/coiffreb.jpg" width="250" height="300" alt="Coiffure Homme">
                </div>
            </div>

            <div class="voirgalerie"><a href="./galerie.php">Voir galerie</a></div>

        </section>

<!-------------------------- SECTION QUATRE ----------------------->
        <section id="SectionQuatre">
            <h1>Nos Prestations</h1>
            <div class="SectionQuatreContainer">
                <div class="PrixLeft">
                    <p>Coupe Homme <span class="EurosGauche">12 €</span></p> 
                    <p>Coupe, Barbe &nbsp; <span class="EurosGauche">15 €</span></p>
                    <p>Coupe Enfant &nbsp; <span class="EurosGauche">10 €</span></p>
                </div>
                <div class="PrixLeft">
                    <p>Coupe + Mèche <span class="EurosCenter">25 €</span></p>
                    <p>Barbe <span class="EurosBarbe">6 €</span></p>
                    <p>Défrisage <span class="EurosDefrisage">10 €</span></p>
                </div> 
                <div class="PrixLeft">
                    <p>Teinture: Couleur <span class="EurosCouleur">10 €</span></p>
                    <p>Décoloration <span class="EurosDecoloration">10 €</span></p>
                    <p>Tresses, locs faire devis</p>
                </div> 
            </div>
        </section>
    </main>
<!---------------------------- FOOTER ----------------------->
<?php
    include("./fonctions/footer.php");
?>
    <script src="./index.js"></script>
</body>
</html>