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


$reponse= $db->query('SELECT * FROM MAP WHERE etage=1');





if (isset($_POST['valider'])) {
	$prise1=$_POST['prise1'];
	$switch1=$_POST['switch1'];
	$result=$db->query('UPDATE MAP SET switch='.$switch1.' WHERE bench='.$prise1);

	
	
	echo 'modification effectuée ('.$prise1.' est maintenant brancher sur le port'.$switch1.')';
}
 ?>
 <a href="http://localhost:8888/V3/map.php?etage=1">Retour</a>