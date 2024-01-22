<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<h2>Connexion</h2>
<p><?php echo $message; ?></p>
<form method="post" action="connexion.php">
    Nom d'utilisateur: <input type="text" name="nomUtilisateur" required><br>
    Mot de passe: <input type="password" name="motDePasse" required><br>
    <input type="submit" value="Se connecter">
</form>
<p>Nouvel utilisateur? <a href='inscription.php'>Inscrivez-vous ici</a></p>
</body>
</html>