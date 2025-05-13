<?php

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp'])) {
    
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $mdp = strip_tags($_POST['mdp']);
    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';

    echo "<h1>Bonjour $prenom $nom !</h1>";
    echo "<p>Votre mot de passe est : <b>$mdp</b></p>";
    echo "<p>Votre adresse e-mail : <i>$email</i></p>";
} else {
    echo "<p>Formulaire incomplet.</p>";
}
?>
