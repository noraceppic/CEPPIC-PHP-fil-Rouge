
<?php
$connexion = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
$connexion->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

$requette="INSERT INTO utilisateurs(id_utilisateur, nom, prenom, mail, $password) 

VALUES (NuLL,'$nom','$prenom','$mail','$password');";


$connexion->exec($requette);