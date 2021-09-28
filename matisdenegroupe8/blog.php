<?php
    session_start();
    include('view/connexion.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="blog.css">
<link rel="shortcut icon" type="image/x-icon" href="img/preview-Thrasher.png">
</head>
<body>

        <header>
            <a href="index.php" style="text-decoration: none;"> accueil </a>
        </header>
        
        <h1> Blog </h1>

        
    <?php
    $articles = $pdo->query('SELECT * FROM articles ORDER BY id DESC');
    ?>


    <div class="list"> 
        <?php while($a = $articles->fetch()){ ?>
        
            <div class="article">
                <a href="article.php?id=<?=$a['id']?>"><?= $a['titre']?></a> <br>
                <img src="<?= $a['img'] ?>">
                <p> <?=substr($a['contenu'], 0,50)?> (...) </p>
            </div>
        <?php 
        }
        ?>
    </div>

    <?php

    ?>

</body>