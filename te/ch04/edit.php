<?php 
/*----------------------------------------------------------------------------
* Nom du programme: edit.php
*
* Auteur : Sonia Robert-Nicoud
* Date: 13.03.2015
* Description: test où nous devons afficher notre table City.
*
*-----------------------------------------------------------------------------
*/
?>
<?php
define("DB_SERVER", 'localhost');
define("DB_USER", 'cpnv');
define("DB_PASSWORD", 'cpnv1234');
define("DB_NAME", 'world');
?>
<?php
 //Déclaration des variables
$id=$_GET['ID'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Chapitre 4 TE1</title>

</head>

<body>

<?php


$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);


if ($dbh->connect_errno) {

die("Problème de connexion ({$mysqli->connect_errno}) " .

$mysqli->connect_error);

}

$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE ID =$id
ORDER BY Name";

if ($result = $dbh->query($sql)) {

//Gestion des erreurs lors de la transmission de la requête

if (!$result) {

$message = 'Requête invalide : ' . mysqli_error() . "\n";

$message .= 'Requête complète : ' . $query;

die($message);

}

//Création de la boucle permettant d'afficher tous les enregistrements

$city = $result->fetch_assoc();

?>

<form method="post" action="cities.php">

<p>ID:<input type="text" value=<?= $city['ID']; ?> /></p>

<p>Name:<input type="text" value=<?= $city['Name']; ?> /></p>

<p>CountryCode:<input type="text" value=<?= $city['CountryCode']; ?> /></p>

<p>District:<input type="text" value=<?= $city['District']; ?> /></p>

<input type="submit" value="Modifier" />

<input type="submit" value="Enregistrer" />

</form>

<?php

}

$result->free();

//Fermeture de la connexion à la base de données

$dbh->close();

?>

</body>
</html>
