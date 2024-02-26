<?php
$titre = "Crêpes Chaudes - Inscription";
require("debut.php");
?>
<div class="inscription">
    <form action="insertioninscription.php" method="post">
        <input type="text" name="nom" placeholder="Nom"> <br>
        <input type="text" name="prenom" placeholder="Prénom"> <br>
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="text" name="mail" placeholder="Email"> <br>
        <input type="password" name="passwd" placeholder="Mot de Passe"> <br>
        <input type="password" name="confpassd" placeholder="Confirmer votre mot de passe"> <br>
        <input type="checkbox" id="checkboxconsent" name="consentement" value="Consentement"> 
        <label for="checkboxconsent">Je confirme d'avoir pris en connaissant du consentement de la politique de confidentialité.</label> <br>
        <input type="submit" value="S'inscrire">
    </form>
</div>
</body>
</html>