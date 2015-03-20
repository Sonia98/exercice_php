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
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>edit</title>

</head>

<body>
    
<?php

//se connecter à la base de donnée et regarder qu'il n'y ait pas de problèmes pour s'y connecter.

$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbh->connect_errno) {
    die("Problèmes de connexion ({$dbh->connect_errno}) " .
        $dbh->connect_error);
}

?>
 
    
    ID:<input type="text" name=""><br>
    Name:<input type="text" name="Name" value=""><br>
    CountryCode:<input type="text" name="CountryCode" value=""><br>
    District:<input type="text" name="District" value=""><br>

    
    <input type="submit" value="Enregistrer"></submit>
    <tr>
    <input type="submit" value="Annuler"></submit>   
    
</body>

</html> 
