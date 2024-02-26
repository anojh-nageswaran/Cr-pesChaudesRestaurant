<?php
$titre = "Crêpes Chaudes";
require("debut.php");

session_start();

if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];

    $codeco = "<li><a href='deconnexion.php'>Déconnexion</a></li>";
    
}else{
    $codeco = "<li><a href='connexion.php'>Connexion</a></li>";
}
?>
    <header>
        <nav class="navbar">
            
            <a href="#" class = "logo"> Crêpes Chaudes</a>

            <div class="nav-links">

                <ul>
                    <li class = "Accueil" class = "active"><a href="index.php">Acceuil</a></li>
                    <li><a href="menu.php">Carte</a></li>
                    <li><a href="apropos.php">A propos</a></li>
                    <li><a href="avis.php">Avis</a></li>
                    <?php echo $codeco; ?>
                </ul>
            </div>

            <img src="menu-btn.png" alt="menu Hamburger" class = "menu-hamburger">
        </nav>
    </header>

    <main>
        <img src="logo.png" alt="" class= "logo-restaurant">

        <div class= "test">
        </div>
        

        <section class="texte-acceuil">
            <div class = "accroche">
                <h1 class = "titre">Crêpes Chaudes</h1>
                <h2>Venez goûtez à l'authentique cuisine indienne & des crêpes chaudes</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum laudantium vero tempora <br>
                    illo sapiente maiores natus totam accusamus saepe assumenda sed quos, nulla magni porro corporis !</p>
                <a href="#" class="bouton-menu">MENU</a>    
            </div>
        </section>
        <section class="defilement">
            <div class="images">
                <img src="fond_defile_1.jpg" alt="" class="image_defile">
                <img src="fond_defile_2.jpg" alt="" class="image_defile">
                <img src="fond_defile_3.jpg" alt="" class="image_defile">
                <img src="fond_defile_4.jpg" alt="" class="image_defile">
                <img src="fond_defile_5.jpg" alt="" class="image_defile">
            </div>

            <div class="images">
                <img src="fond_defile_1.jpg" alt="" class="image_defile">
                <img src="fond_defile_2.jpg" alt="" class="image_defile">
                <img src="fond_defile_3.jpg" alt="" class="image_defile">
                <img src="fond_defile_4.jpg" alt="" class="image_defile">
                <img src="fond_defile_5.jpg" alt="" class="image_defile">
            </div>
        </section>

        <section class="a_propos">
            <div class="bloc_texte_a_propos">
                <h1>A PROPOS DE NOUS</h1>
                <h2>Notre histoire</h2>
                <p>Crêpes Chaudes est un concept très innovant qui propose des plats indiens comme le très populaire butter chicken & <br>
                des crêpes salées et sucrées. Cette idées voit le jour en 1998 après la naissance du GOAT GOWTHAMAN !!!</p> 
                <a href="#" class="bouton-apropos">Cliquez ici pour en savoir plus</a>
            </div>
        </section>

        <section class= "contact_bloc">
            <div class="bloc_image">

            </div>
            <div class= "contact">
                <h1 class="titre_contact">Contact</h1>
                <h2>07 50 74 89 52 15</h2>
            </div>

        </section>

        <section class="map_conteneur">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.2755324118275!2d2.3739967768062233!3d48.
                    89108589840457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dd3e15b9ac1%3A0x159b3342b5a78169!2s186%20Rue%20de%20Crim%C3%A9e%2C%2075019%20Paris!5e0!3m2!1sfr!2sfr!4v1685228049247!5m2!1sfr!2sfr" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <section class="horaire">
            <div class= "bloc_horaire_texte">
                <h1>HORAIRE</h1>
                <h2>Repas sur place ou à emporter</h2>
                <p>Ouvert tous les jours de 11h à 15h et 18h à 23h30</p>
                <p>Fermé le Dimanche</p>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h2>Crêpes Chaudes</h2>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                </div>
                <p class="copyright">Crêpes Chaudes © 2023</p>
            </div>
        </footer>
    
</body>


    </main>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', ()=> {
        navLinks.classList.toggle("mobile-menu")
    })

    const titre = document.getElementsByClassName("titre");
    

    window.addEventListener("scroll", function () {
    scrollValue =
        (window.innerHeight + window.scrollY) / document.body.offsetHeight;

        console.log(window.scrollY);


    if (window.matchMedia("(min-width: 850px)").matches) {
        if (scrollValue > 0.42) {
        titre.style.opacity = 1;
        titre.style.transform = "none";
         }
        }
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<?php
require("fin.html");
?>