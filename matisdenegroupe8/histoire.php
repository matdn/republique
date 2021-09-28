<!DOCTYPE html>
<html>
<head>
  
   <title> histoire </title>
   <link rel="stylesheet" href="histoire.css">
   <link rel="stylesheet" href="https://use.typekit.net/jmi5kfn.css">
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>
</head>
<body>
    <div id="dark_mode">
        <div class= "parallax">
           <header>
              <a href="index.php" style="text-decoration: none;"> <h2> Retour</h2> </a>
              
              <div class="moon_sun" id="moon">
                <img class="lune" src="img/lune.png">
              </div> 
              <div class="moon_sun" id="sun">
                <img class="soleil" src="img/sun.png">
              </div> 
              
            </header>
            <div class="title">
              <h1> History </h1>
            </div>
            
        </div>
      <div id="content">
        
        <div class="story1">
          <h2> </h2>
          <p class="pstory1">La place de la république est depuis plus d'un siècle <br> le lieu de rassemblement des Parisiens 
            pour célébrer,  mais aussi pour manifester et rendre hommage. </p>
          
            <div class="statue">
                <img src="img/statuerep.png">
              <div id="box1">
                <p>Inaugurée en 1883, cette immense statue est une allégorie de la République. <br><br>
                Constituée d’une sculpture en bronze de 9,5 mètres <br> et d’un piédestal élevé sur 15,5 mètres, <br>
                elle représente La Marianne, coiffée d’un bonnet phrygien, <br>
                portant une tablette des “Droits de l’Homme” et d’un rameau d’olivier, symbole de paix.</p>
              </div>
           </div>
        </div>
    
        <!--Slider avec explication (js avec fonction onclick dans le html)-->
    
        <div class="story2">
          <div id="box2">
            <h2> 1789-1790 </h2>
            <br>
            <p>
            Le premier relief illustre la date du <u>20 juin 1789</u>. On y voit le Serment du Jeu de Paume, avec au centre Jean-Sylvain Bailly, 
              futur premier maire de Paris, lisant le texte au reste de l’assemblée. <br><br> Vient ensuite la date du <u>14 juillet 1789</u> et son illustration de la prise de la Bastille, 
              puis le <u>4 août 1789</u>, jour qui a vu l’intégralité des privilèges féodaux être supprimée. <br><br> Le <u>14 juillet 1790</u> complète ce premier ensemble et représente la Fête de la Fédération,
               célébrée sur le Champ-de-Mars pour le premier anniversaire de la prise de la Bastille. <br>
            </p>
          </div>

          <div id="slider">
            <div id="precedent" onclick="ChangeSlide(-1)"> <B><</B> </div> 
            <!--J'affecte la fonction ChangeSlideavec argument -1 -->
            <img src="img/1789_1.png" alt="1789" id="slide">
            <div id="suivant" onclick="ChangeSlide(1)"> <b>></b> </div>
          </div>
        </div>
    
        <!--Nouvelle div pour un deuxieme bloc avec slider et explication, identique au premier-->
    
        <div class="story3">
          <div id="slider">
            <div id="precedent" onclick="ChangeSlide2(-1)"> <B><</B> </div>
            <img src="img/1830.png" alt="1830" id="slide2">
            <div id="suivant" onclick="ChangeSlide2(1)"> <b>></b> </div>
          </div>

          <div id="box3">
            <h2> 1830-1880 </h2>
            <br>
            <p>
                Le <u>29 juillet 1830</u>, le peuple parisien triomphe sur les forces armées du roi Charles X.  
                 En ce troisième jour d’insurrection que l’on appellera les <br>« Trois Glorieuses », 
                 le peuple a remporté sa victoire dans la rue et l’option d'une société républicaine est alors envisagée. 
                 Le <u>24 février 1848</u>, après trois jours d’insurrection, la Deuxième République est proclamée.<br><br>
                 Le <u>4 mars 1848</u> l'une des premiere disposition est prise par ce nouveau régime:
                 le suffrage universel masculin.
                 Le <u>4 septembre 1870</u>, correspond à la proclamation de la Troisième République. Le dernier relièfe, le <u>14 juillet 1880</u>,
                 est la date de la première Fête Nationale qui s’est déroulée 90 ans après la Fête de la Fédération dont elle en est la célébration.
              <br>
              <br>
            </p>
          </div>
      
        </div> 
         
      </div> 
  <footer>
    <div class="coordonnees"> 
    <p> © mentions légales <br>
        Matis DENE </p>
    </div>

  </footer> 
    </div>      
        <script src= "js/histoire.js"></script>
</body>

</html>
 