
 <?php
 session_start();
 include('view/connexion.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Blog </title>
<link rel="stylesheet" href="blog.css">
<link rel="shortcut icon" type="image/x-icon" href="img/preview-Thrasher.png">
</head>
<body>
 <?php
 if(isset($_GET['id']) AND !empty($_GET['id'])){
         $articles = $pdo->prepare('SELECT * FROM articles WHERE id = ?');
         $articles->execute(array($_GET['id']));
        if($articles->rowCount() == 1){
            $articles = $articles->fetch();
            $titre = $articles['titre'];
            $contenu = $articles['contenu'];
            $image = $articles['img'];
         }
         else{
             die("Cet article n'existe pas!");
         }
    }else{
         die('erreur');
    }
    ?>
  <?php
   $image= $pdo->query('SELECT * FROM articles');
  ?>

        <header>
        <a href="blog.php" style="text-decoration: none;"> retour</a>
        </header>
        <h1> Blog </h1>
    <div class="articles">
        <h2><?= $titre ?></h2>
        <img src="img/accueil.jpg">
        <p><?= $contenu ?> </p>
        
    </div>
</body>
</html>
