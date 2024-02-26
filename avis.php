<?php
$titre = "Crêpes Chaudes - Avis";
require("debut.php");
session_start();

if(!isset($_SESSION['username'])){   
    $codeco = "<li><a href='connexion.php' id='connexion'>Connexion</a></li>";
}else{
    $codeco = "<li><a href='deconnexion.php'>Déconnexion</a></li>";
    $user = $_SESSION['username'];
}


    
if($_SERVER['REQUEST_METHOD'] === 'POST'){  
    $note= $_POST['note'];
    $critique = $_POST['critique'];
    $datec = date("d:m:y");
    
    $connexion = mysqli_connect ("localhost", "root", "", "crepeschaudes");
        
    $critique = mysqli_real_escape_string($connexion, $critique);
    $user = mysqli_real_escape_string($connexion, $user);

    $requete = "INSERT INTO avis(username,note,datec,critique) VALUES ('$user','$note', '$datec','$critique')";
    $insertion = mysqli_query($connexion, $requete);
    if ($insertion == true){
        echo "C'est enregistré!";
    } else{
        echo "Votre avis n'a pas pu être enregistré." . mysqli_error($connexion);
    }

    mysqli_close($connexion);
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
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', ()=> {
        navLinks.classList.toggle("mobile-menu")
    })
    </script>
    <main>
    <div class="bloc_horaire_texte">
                <form action="avis.php" method="post">
                Note :
                <input type="number" name="note" min="0" max="5"><br><br>
                Avis :
                <textarea name="critique" id="critique" rows="5"></textarea><br><br>
                <button type="submit" name="envoyer">Envoyer !</button> 
                </form> 
    </div>
    </main>
<?php
require("fin.html");
?>