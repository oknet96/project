<?php

// Connexion à la base de données
$serveur = "localhost";
$username = "root";
$password = "";
$base = "formulaire";

$connexion = mysqli_connect($serveur, $username, $password, $base);

// Vérification de la connexion
if (!$connexion) {
	die("Erreur de connexion : " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insertion des données dans la base de données
$sql = "INSERT INTO inscription (nom, prenom, email, message) VALUES ('$nom', '$prenom', '$email', '$message')";

if (mysqli_query($connexion, $sql)) {
	echo "Le message a été envoyé avec succès.";
} else {
	echo "Erreur : " . mysqli_error($connexion);
}

// Fermeture de la connexion
mysqli_close($connexion);

?>
