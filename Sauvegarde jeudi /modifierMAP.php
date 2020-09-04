<?php
// A MODIFIER EN ModifierMAP.php 
// Connexion base de donnée 
try
{
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}


$reponse= $db->query('SELECT * FROM MAP');




//$prise = $_POST['prise'];
//$switch = $_POST['switch'];

//Syntaxe pour recup variable POST



if (isset($_POST['valider'])) {
	$prise=$_POST['prise'];
	$switch=$_POST['switch'];
	$etage= $_POST['etage']; 
	$result=$db->query('UPDATE `MAP` SET `switch`='.$switch.' WHERE `bench`='.$prise.'AND `etage='.$etage);
	
	echo 'modification effectuée ('.$prise.' est maintenant brancher sur le port'.$switch.')';
}
 ?>