<?php
   include("config.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['identifiant']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mot_de_passe']); 
      $myconfirm_password = mysqli_real_escape_string($db,$_POST['confirm_mdp']); 
      
      $sql = "INSERT INTO identifiant (login,password) VALUES ('".$myusername."','".$mypassword."')";

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    $valeur = "bienvenu";
      if(($mypassword == $myconfirm_password)&&($mypassword!='')) {
         //session_register("login");
        
         echo "Inscription effectuer avec succes";
         header("location: loginV3.php");
         //echo '<a href="RDC.php?param='.$valeur.'">Lien</a>';
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="New.css">
	<meta charset="utf-8">
</head>
<body>
 

	<form class="Inscription" method="post" action="">
      <h1>INSCRIPTION</h1>
      <input type="text" name="identifiant" placeholder="Identifiant"/>
      <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>
      <input type="password" name="confirm_mdp" placeholder="confirmer mot de passe"/>
      <input type="submit" name="valider">
      <br>
      <br>
  <input type="button" name="Retour" onclick="location.href='loginV3.php';" value="Retour" />
     </form>
    
</body>
</html>