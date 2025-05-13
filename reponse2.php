<?php
$nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? strip_tags($_POST['prenom']) : '';
$mdp = isset($_POST['mdp']) ? strip_tags($_POST['mdp']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Réponse 2</title>
</head>
<body>
    <h1>Bonjour, <?php echo $prenom . ' ' . $nom; ?> !</h1>
    <h2>Votre mot de passe est : <?php echo $mdp; ?></h2>
    <p>Votre e-mail : <?php echo $email; ?></p>
</body>
</html>
