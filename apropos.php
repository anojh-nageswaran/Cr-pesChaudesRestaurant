<?php
$titre = "Crêpes Chaudes - A propos de nous";
require("debut.php");
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
                    <li><a href="connexion.php">Sign-up</a></li>
                    <li><a href="connexion.php">login</a></li>
                </ul>
            </div>

            <img src="menu-btn.png" alt="menu Hamburger" class = "menu-hamburger">

        </nav>

    </header>
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