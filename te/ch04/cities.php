<?php 
/*----------------------------------------------------------------------------
* Nom du programme: cities.php
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
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>cities</title>

</head>

<body>
    
<?php

//se connecter à la base de donnée et regarder qu'il n'y ait pas de problèmes pour s'y connecter.

$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbh->connect_errno) {
    die("Problèmes de connexion ({$dbh->connect_errno}) " .
        $dbh->connect_error);
}


$sql = "SELECT ID, Name, CountryCode, District FROM City WHERE CountryCode = 'CHE'
ORDER BY Name";

//petite phrase avant le tableau pour dire le nombres de villes qu'il y a.

if ($result = $dbh->query($sql)) {
    $nbr = $result->num_rows;
    echo "Nous retrouvons " . $nbr . " ville(s) en Suisse";
}

//Création de la table.

?>

<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>CountryCode</td>
        <td>District</td>
        <td>Modifier</td>
    </tr>

<?php

while ($city = $result->fetch_assoc()) 

{

//Affichage de la table

?>

<tr>
    <td><?php echo $city['ID'];?></td>
    <td><?php echo $city['Name'];?></td>
    <td><?php echo $city['CountryCode'];?></td>
    <td><?php echo $city['District'];?></td>
    <td><a href="edit.php"> modifier </a></td>   
 </tr>

<?php

}

?>

</table>

</body>

</html>
