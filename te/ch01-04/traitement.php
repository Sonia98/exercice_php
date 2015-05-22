 <?php
 /*----------------------------------------------------------------------------
* Nom du programme: traitement.php
*
* Auteur : Sonia Robert-Nicoud
* Date: 22.05.15
* Description: test pratique où nous devons créer un formulaire qui demande le nom, le sexe et l'adresse mail.
**-----------------------------------------------------------------------------
*/ 

$nom=$_POST['nom'];
$courriel=$_POST['courriel'];

?>
 <!DOCTYPE html>
<html>
<head>
<title>traitement.php</title>
</head>

<body>
  
<?php

echo "Bonjour $nom, votre adresse mail est: $courriel";

?>
</body>

</html> 
