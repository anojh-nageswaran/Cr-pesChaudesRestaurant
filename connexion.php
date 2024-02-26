<?php
$titre = "Crêpes Chaudes - Connexion";
require("debut.php");
session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $user = $_POST['username'];
    $passwd = $_POST['passwd'];

    $connexion = mysqli_connect("localhost", "root", "","crepeschaudes");

    if (!$connexion) 
    {
        echo "Désolé, connexion au serveur impossible\n";
        exit;
    }

    if (!mysqli_select_db ($connexion,"crepeschaudes")) 
    {
        echo "Désolé, accès à  la base impossible\n";
    exit;
    }

    $requete = "SELECT username, passwd FROM user WHERE username = '$user'";
    $resultat = mysqli_query($connexion,$requete);

    if(!$resultat){
        die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
    }

    if (mysqli_num_rows($resultat) == 1){
        $row = mysqli_fetch_assoc($resultat);  
        $hasherpass = $row['passwd'];
  
        if(password_verify($passwd,$hasherpass)){
            echo "Connexion Réussie !";
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit;
        } else{
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
    else 
    {  
        echo "<B>Erreur dans l'exécution de la requête $requete.</B><BR>";
        echo "<B>Message de MySQL :</B> " .  mysqli_error($connexion);
    }  

    mysqli_close($connexion);
}
?>
<div>
    <h1>Connectez-vous</h1>
    <form action="connexion.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur"> <br>
        <input type="password" name="passwd" placeholder="Mot de Passe"><br>
        <input type="submit" value="Se connecter">
    </form>
    <p>Pas encore inscrit? <a href="inscription.php">Incrivez-vous !</a></p>
</div>

</body>
</html>