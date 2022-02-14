<?php require ("header.php"); ?>

<h1> Tous les articles </h1>

<?php

MonOrm();
require_once("articles_db.php");

$entry = Articles_db::all();
?> <div class='liste_articles'> <?php

foreach($entry as $monarticle){
    echo "

    <div class='liste_site'> <a href='monarticle.php?id=".$monarticle->id."'> Voir mon article:      $monarticle->titre      </a> 
    
    
    
  -   <a href='update.php?id=".$monarticle->id."'>Modifier</a>-
    
    
    <a href='delete.php?id=".$monarticle->id."'>Supprimer</a></div>
    
    ";
}


?>
</div>

<?php include ("footer.php"); ?>
