<?php include ("header.php"); ?>

<h1> Tous les articles </h1>

<?php

MonOrm();
require_once("articles_db.php");

$entry = Articles_db::all();

foreach($entry as $monarticle){
    echo "

    <a href='monarticle.php?id=\"".$monarticle->id."'>      $monarticle->titre      </a>
    
    
    
  -   <a href='crud/update.php?id=".$monarticle->id."'>Modifier</a>-
    
    
    <a href='crud/delete.php?id=".$monarticle->id."'>Supprimer</a><hr>
    
    ";
}


?>

<?php include ("footer.php"); ?>
