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
            <section class="annonce_menu">
                <div class="titre_anonoce_menu">
                        <h1> NOS <br> MENUS</h1>
                </div>

            </section>
    </main>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', ()=> {
        navLinks.classList.toggle("mobile-menu")
    })
    </script>
<?php
require("fin.html");
?>