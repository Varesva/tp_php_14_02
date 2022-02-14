<!-- <h1>Modifier un article</h1>
<?php include ("../header.php"); ?>
<?php

var_dump($_GET);
$id=$_GET['id'];
MonOrm();
require_once("../Articles_db.php");

$entry = Articles_db::retrieveByPK($_POST['id']);

?>

<!-- <form action="../crud/create.php" method="POST"> -->
<form action="../crud/updated.php" method="post"></form> 
        <h2>Modifier un article: </h2>
        <br>
        <label for="titre">Entrer le titre de l'article à modifier: </label>
        <input type="text" name="titre" placeholder= "Vélo BMX neuf" maxlength="50">
        <br>
        <label for="prix">Entrer le prix (en €) de l'article à modifier: </label>
        <input type="text" name="prix" placeholder= "30€" maxlength="4" size="5">
        <br>
        <label for="description">Entrer la description de l'article à modifier: </label>
        <input type="text" name="description" placeholder= "Caractéristiques de l'article, état du produit (comme neuf, utilisé quelques fois etc)" maxlength="300" size="70">
    
        <input type="submit" value="Modifier mon article">
    </form>


<?php include ("../footer.php"); ?>