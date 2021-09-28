<!DOCTYPE html>
<html>
<head>
  
   <title> galery </title>
   <link rel="stylesheet" href="galerie.css">
   <link rel="stylesheet" href="https://use.typekit.net/jmi5kfn.css">
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>

   <?php
   include('view/connexion.php');
   ?>

</head>
<body>
    <div id="lightbox"></div>
    <div id="dark">
      
            <header id="menu">
              <a href="index.php" style="color: white;  text-decoration: none;"> <h2> Retour </h2> </a>
              
            </header>
<!-- fin header -->
            <h1 class="title"> Galerie </h1>


            <div id="masonry">
            
              <img src= "img/crisis.png">
              <img src= "img/gris.png">
              <img src= "img/red.png">
              <img id="jump" src= "img/jump.jpg" >
              <img src= "img/rose.png">
             
            </div>
<!-- fin effet massonry -->
            <form class= "form_comment" method="post">
            <input id="pseudo" type="text" name="pseudo" placeholder="Pseudo">
            <textarea id="message" name="message" placeholder="Message"></textarea>
            <input id="poster" type="submit" value="Poster">
            </form>
          
          </div>
          
        <?php

          if(isset($_POST['pseudo'])AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
          {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $message = htmlspecialchars($_POST['message']);
            

            $insert = $pdo->prepare('INSERT INTO commentaires(pseudo,message,date_et_heures) VALUES(?,?, NOW())');
            $insert->execute(array($pseudo, $message ));
          }
        ?>
        <?php
          $reqmes = $pdo->query('SELECT * FROM commentaires ORDER BY id DESC');
          while($mes = $reqmes->fetch())
          {
        ?>
         <div class="comment"> <?php echo $mes['pseudo'] ?> : <?php echo $mes['message'] ?> le <?php echo $mes['date_et_heures'] ?><br>
          <?php
          } ?>
      
    </div>
    

    <script src= "js/galerie.js"></script>
</body>

</html>
 
