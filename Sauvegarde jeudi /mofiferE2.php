<?php 
// Connexion base de donnée 
try
{
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}


$reponse= $db->query('SELECT * FROM ETAGE2');




//$prise = $_POST['prise'];
//$switch = $_POST['switch'];

//Syntaxe pour recup variable POST



if (isset($_POST['valider'])) {
	$prise2=$_POST['prise2'];
	$switch2=$_POST['switch2'];
	$result=$db->query('UPDATE `ETAGE2` SET `switch`='.$switch2.' WHERE `bench`='.$prise2);
	
	echo 'modification effectuée ('.$prise2.' est maintenant brancher sur le port'.$switch2.')';
}
 ?>