<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
     
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['identifiant']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mot_de_passe']); 
      $sql = "SELECT id FROM identifiant WHERE login = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		$valeur = "bienvenu";
      if(($count == 1)&&($myusername=!'')){
         //session_register("login");
         header("location: map.php");
         //echo '<a href="RDC.php?param='.$valeur.'">Lien</a>';
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="Login.css">
   <title>Login</title>
</head>
<body>
   <form class="Box" method="post" action="">
      <h1>Login</h1>
      <input type="text" name="identifiant" placeholder="Identifiant"/>
      <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>
      <br/>
       <input type="submit" name="Validé"/>
       <br>
      <br>
      <input type="button" name="New" onclick="location.href='New.php';" value="Nouvel utilisateur ?" />
      
   </form>

</body>
</html>