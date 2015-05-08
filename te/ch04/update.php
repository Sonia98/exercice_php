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

//déclaration des variables
$id=$_POST['ID'];
$district=$_POST['district'];
$population=$_POST['population'];

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

if ($dbh->connect_errno) {     // a changer  ne pas utiliser die car ça veut dire meurt et si pose problème en haut ne continue pas le code
    die("Problèmes de connexion ({$dbh->connect_errno}) " .
        $dbh->connect_error);
}

//Requete 

$sql="UPDATE City SET District='$district', Population='$population' WHERE ID='$id'";

$result=$dbh->query($sql);

header('Refresh:1 ; url=cities.php');

$dbh->close();


    


?>

    <h1>Update en cours...</h1>

</body>
</html>
