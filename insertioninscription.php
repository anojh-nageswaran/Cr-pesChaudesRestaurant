<?php 
  if($_SERVER['REQUEST_METHOD'] === 'POST'){  
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $password = $_POST['passwd'];
    $confp = $_POST['confpassd'];
    $username = $_POST['username'];
  }
  if(empty($username) || empty($password) || empty($nom) || empty($prenom) || empty($confp) || empty($email)){
    
    echo "Veuillez remplir tous les champs";

  }elseif($password !== $confp){
    
    echo "Le mot de passe et la confirmation de mot de passe n'est pas identique";

  }else{

    $connexion = mysqli_connect ("localhost", "root", "", "crepeschaudes");
    $hashpasswd = password_hash($password, PASSWORD_DEFAULT);
    $requete = "INSERT INTO user(username,passwd,email,nom,prenom) VALUES ('$username','$hashpasswd','$email', '$nom','$prenom')";
    $insertion = mysqli_query($connexion, $requete);
    if ($insertion == true){
      echo "C'est enregistré!";
      header("Location: connexion.php");
      exit;
    } else{
      echo "Votre compte n'a pas pu être enregistré." . mysqli_error($connexion);
    }

    mysqli_close($connexion);
  }

?>