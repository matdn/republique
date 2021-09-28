<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title> placedelarepublique </title>
   <link rel="stylesheet" href="form.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <link rel="stylesheet" href="https://use.typekit.net/jmi5kfn.css">
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>
   <link rel="shortcut icon" type="image/x-icon" href="img/preview-Thrasher.png">


<body>

<?php

include('view/connexion.php');

if(isset($_POST['valider']))
    {
        $email = htmlspecialchars($_POST['email']);
        $pass = sha1($_POST['pass']);
        $cpass = sha1($_POST['cpass']);
        $type = 'user';
        $pseudo = ($_POST['pseudo']);
        if(!empty($_POST['email']) AND !empty($_POST['pass'])AND !empty($_POST['pseudo']))
        {
          $reqemail = $pdo->prepare("SELECT * FROM user WHERE email= ?");
          $reqemail ->execute(array($email));
          $emailexistant = $reqemail->rowCount();
                if($emailexistant == 0)
                {
                        if($pass == $cpass)
                        {
                          $insert = $pdo->prepare("INSERT INTO user(email,password,pseudo,type) VALUES(?,?,?, 'user')");
                          $insert ->execute(array($email, $cpass, $pseudo));
                          $erreur = "Votre compte a bien été créé!";

                        }
                        else{
                         $erreur = "Les mots de passes sont différents ";
                         }
                }
                else{
                     $erreur= "Un compte existe déja pour cette adresse mail!";
                }
             
        }
        else{
            $erreur = "Tous les champs doivent être complétés";  
        }
}
        
    

?>

<form id= "inscription" name= "inscription" method= "POST" >

	<!--création de la div formulaire avec l'élément "method" pour définire le format de sortie et "post" pour allé retour serveur -->
	
	<a href="index.php" class="back"> Retour </a>
	
	<div class="container">
	  
	   <div class="header">
	   		
	   		<h1> Rejoignez-nous! </h1>
			<a href="index.php" style="color:tomato; text-decoration:none; ">  retour </a>
	  
	   </div> 
       
	   <div id="message">
			
			 Tous les champs sont obligatoires 
	
		</div>
        <div class= "div_input">
        	<label >Pseudo </label>
			<input type= "text" name= "pseudo" id= "email" class= "imput" placeholder= "Cjcollins@gmail.com">
			
        </div>
  
        <div class= "div_input">
        	<label >Email </label>
			<input type= "email" name= "email" id= "email" class= "imput" placeholder= "Cjcollins@gmail.com">
			
        </div>
   
        <div class= "div_input">
        	<label> Mot de passe </label>
			<input type= "password" name= "pass" id= "pass" class= "imput" placeholder= "repSkate.2854@">
			
        </div>
        <div class= "div_input">
        	<label> Confirmation mot de passe </label>
			<input type= "password" name= "cpass" id= "cpass" class= "imput" placeholder= "repSkate.2854@">
			
        </div>
   

       <button id="valider" name="valider" type="submit"> valider </button>
       <div id="ins_con">
             <h3> Déja inscrit? </h3>
	         <a href="connexion.php"> Vous connecter </a>
        </div>
	<?php
    if(isset($erreur))
    {
        echo "<div class='div_input' style='color:tomato;'>"."$erreur"."</div>";
    } 
    
    
    ?>
	
	
	</div>
</form>



<script src= "js/form.js"></script>

</body>
</html>