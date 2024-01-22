<?php
require_once 'utilisateurs.php';

$message = "";

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomUtilisateur = $_POST['nomUtilisateur'];
    $motDePasse = $_POST['motDePasse'];

    // Appel de la fonction pour connecter l'utilisateur
    if (connecterUtilisateur($nomUtilisateur, $motDePasse)) {
        // Connecté avec succès
        $message = "Connexion réussie. Bienvenue, $nomUtilisateur!";
        // Ici, vous pouvez rediriger vers une page sécurisée ou gérer la session
    } else {
        // Échec de la connexion
        $message = "Échec de la connexion. Veuillez vérifier vos identifiants.";
    }
}

?>
