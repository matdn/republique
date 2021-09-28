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
session_start();
include('view/connexion.php');
            

if(isset($_POST['valider']))
    {
        $emailconnect = htmlspecialchars($_POST['emailconnect']);
        $passconnect = sha1($_POST['passconnect']);
        
            if(!empty($_POST['emailconnect']) AND !empty($_POST['passconnect']))
            {
                $requser = $pdo->prepare("SELECT * FROM user WHERE email= ? AND password= ?");
                $requser ->execute(array($emailconnect, $passconnect));
                $userexist = $requser->rowCount();

                if($userexist == 1){
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['email'] = $userinfo['email'];
                    $_SESSION['type'] = $userinfo['type'];
                    $_SESSION['pseudo'] = $userinfo['pseudo'];
                    
                    if($userinfo['type'] === 'admin'){
                        header('Location: admin.php');
                    }else{
                        header('Location: user.php');
                    }
                }
                else{
                $erreur = "Mot de passe ou email incorrect";
                }

            }else{
                $erreur = "Remplissez les champs";
            }
        

    }
        
?>

<form id= "inscription" name= "inscription" method= "POST" >

	<!--création de la div formulaire avec l'élément "method" pour définire le format de sortie et "post" pour allé retour serveur -->
	
	<a href="index.php" class="back"> Retour </a>
	
	<div class="container">

	   <div class="header">

	   		<h1> Vous connecter! </h1>
			<a href="index.php" style="color:tomato; text-decoration:none; ">  retour </a>

	   </div> 

	   <div id="message">
			
			 Tous les champs sont obligatoires 
	
		</div>

        <div class= "div_input">
        	<label >Email </label>
			<input type= "email" name= "emailconnect" id= "email" class= "imput" placeholder= "Cjcollins@gmail.com">
			
        </div>

        <div class= "div_input">
        	<label> Mot de passe </label>
			<input type= "password" name= "passconnect" id= "mdp" class= "imput" placeholder= "repSkate.2854@">
			
        </div>
        

       <button id="valider" name="valider" type="submit"> valider </button>
       <div id="ins_con">
             <h3> Pas encore inscrit? </h3>
	         <a href="form.php"> Vous inscrire </a>
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