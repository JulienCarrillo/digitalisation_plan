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



?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="modifier.css">
	<title>Modification</title>
</head>

		<header>
		<?php
			include 'menu.php';

		?>
	
</header>
<body>

<div class="RDC">	

<form name="RDC"action="modifierRDC.php" method="POST">
	
				<h1> RDC </h1>

				<!-- Pour avoir la BDD relier a la liste déroulante -->
			<!-- Le name="" sera la variable utiliser dans le traitement des donnée dans modifierRDC -->
				
		<SELECT name="prise"size="1">
			<?php
				$reponse= $db->query('SELECT * FROM MAP WHERE etage=0');
				while ($donnees = $reponse->fetch()) 
					{
			?>
					<OPTION value="<?php echo $donnees['bench'];?>"> <?php echo $donnees['bench'];?></OPTION>

					<?php
					}
					?>
				
		</SELECT>

						<div class="box1"> 
							<!-- Le name="" sera la variable utiliser dans le traitement des donnée dans modifierRDC -->
							<input type="text" name="switch" placeholder="Nouveau port du switch"> 
							<input type="submit" name="valider">
						</div>
				

	
	</form>
</div>	



<?php 
$db = null;
$reponse = null;
?>
<?php
// Connexion base de donnée 
try
{
        $db1 = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}




?>




<div class="Etage1">
	
	<form name="etage1"action="modifierE1.php" method="POST">
		<h1>Etage 1</h1>
	
				<!-- Pour avoir la BDD relier a la liste déroulante -->
				<SELECT name="prise1" size="1">

						<?php
				$reponse1= $db1->query('SELECT * FROM MAP WHERE etage=1');
				while ($donnees = $reponse1->fetch()) 
					{
			?>
	
					<OPTION value="<?php echo $donnees['bench'];?>"> <?php echo $donnees['bench'];?></OPTION>

					<?php
					}
					?>

				</SELECT>

						<div class="box2"> 
							<input type="text" name="switch1" placeholder="Nouveau port du switch"> 
							<input type="submit" name="valider">
						</div>
					

		</form>

</div>

<?php 
	$db1 = null;
	$reponse1 = null;
?>		



<?php
// Connexion base de donnée 
try
{
        $db2 = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}



?>



<div class="Etage2">
	
<form name="etage2" action="modifierE2.php" method="POST">
	
		<h1>Etage 2</h1>
	
		
		
	<SELECT name="prise2" size="1">
					<?php
				$reponse2= $db2->query('SELECT * FROM MAP WHERE etage=2');
				while ($donnees = $reponse2->fetch()) 
					{
			?>
	
					<OPTION value="<?php echo $donnees['bench'];?>"> <?php echo $donnees['bench'];?></OPTION>

					<?php
					}
					?>

	</SELECT>
					

		<div class="box3">
			<input type="text" name="switch2" placeholder="Nouveau port de switch">
			<input type="submit" name="valider">
		</div>
</form>



</div>	

<?php 
	$db2 = null;
	$reponse2 = null;
?>	
	

</body>
</html>