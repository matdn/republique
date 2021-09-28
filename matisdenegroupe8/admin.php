<?php
session_start();
include('view/connexion.php');?>

<!DOCTYPE html>
<html>
<head>
  
   <title> galery </title>
   <link rel="stylesheet" href="dashboard.css">
   <link rel="stylesheet" href="https://use.typekit.net/jmi5kfn.css">
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>
<body>
<header> 
   <a href="index.php?"> retour</a>
   <p> | </p>
   <a href="deconnexion.php">Se déconnecter</a>
</header> 
<div class="gestion">
    <h1> Espace administrateur </h1>   
<?php

    

    $user = $pdo->query('SELECT * FROM user ORDER BY id DESC');
    $comment = $pdo->query('SELECT * FROM commentaires ORDER BY id DESC');
    $articles = $pdo->query('SELECT * FROM articles ORDER BY id DESC');

    if(isset($_GET['supprime']) AND !empty($_GET['supprime'])){
        $supprime = $_GET ['supprime'];

        $req= $pdo->prepare('DELETE FROM user WHERE id = ?');
        $req->execute(array($supprime));
    }
    if(isset($_GET['delete']) AND !empty($_GET['delete'])){
        $delete = $_GET ['delete'];

        $reqd = $pdo->prepare('DELETE FROM commentaires WHERE id = ?');
        $reqd ->execute(array($delete));
    }
    if(isset($_GET['remove']) AND !empty($_GET['remove'])){
        $remove = $_GET ['remove'];

        $reqr = $pdo->prepare('DELETE FROM articles WHERE id = ?');
        $reqr ->execute(array($remove));
    }
    ?>

    <!-- récupération des infos dans l'url avec methode ? -->

    <h2> gestion des utilisateurs </h2>
    <?php
    while($u = $user->fetch()){
        $delete = $u['id'];
        ?>
    <p> <?= $u['pseudo']?> <a class="supp" href="admin.php?supprime=<?=$u['id']?>">Supprimer</a>
    
        <?php
    }
    ?>
    <h2> Espace commentaires </h2>
    <?php
    while($c = $comment->fetch()){
        $supp = $c['id'];
    ?>
    <p> <?= $c['pseudo'] ?> : <?= $c['message']?> <a class="supp" href="admin.php?delete=<?=$c['id']?>">Supprimer</a></p>
        <?php
    }
    ?>
    <h2> Blog </h2>
    <?php
     while($a = $articles->fetch()){
        $remove = $a['id'];
    ?>
    <p> <?= $a['titre'] ?> <a class="supp" href="admin.php?remove=<?=$a['id']?>">Supprimer</a></p>
        <?php
    }
    ?>

    <!-- affichage de toute les infos cherchées en bdd -->
    
</div>
</body>

    