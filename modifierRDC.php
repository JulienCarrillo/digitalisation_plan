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


$reponse= $db->query('SELECT * FROM MAP WHERE etage=0');




//$prise = $_POST['prise'];
//$switch = $_POST['switch'];

//Syntaxe pour recup variable POST



if (isset($_POST['valider'])) {
	$prise=$_POST['prise'];
	$switch=$_POST['switch'];
	$result=$db->query('UPDATE `MAP` SET `switch`='.$switch.' WHERE `bench`='.$prise);
	
	echo 'modification effectuée ('.$prise.' est maintenant brancher sur le port'.$switch.')';
}
 ?>
<a href="http://localhost:8888/V3/map.php?etage=1">Retour</a>