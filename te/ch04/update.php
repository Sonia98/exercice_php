<?php 
/*----------------------------------------------------------------------------
* Nom du programme: modifier.php
*
* Auteur : Sonia Robert-Nicoud
* Date: 27.03.2015
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

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<title>edit</title>

</head>

<body>
    
<?php
    
$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbh->connect_errno) {
    die("Problèmes de connexion ({$dbh->connect_errno}) " .
        $dbh->connect_error);
}


$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE CountryCode = 'CHE'
ORDER BY Name";



?>
