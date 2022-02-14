<?php include ("header.php"); ?>
<h1>Article à créer</h1>
<?php
MonOrm();
include("articles_db.php");


// if(isset($_SESSION['user'])==true){
    echo "<div class = 'session_site'> Bienvenue dans votre espace !"; ?>
         -  <a href="liste_articles.php">Liste de tous les articles </a>
         - <a href="favoris.php"> Articles favoris </a> </div> 
        <?php     
    // }


echo " <h2> Vous venez de créer l'article suivant : </h2>
<div class='creation_site'> <h3> - Titre: </h3> ". $_POST['titre']." <h3>- Prix: </h3>" .$_POST['prix']." <h3>- Description: </h3>" .$_POST['description']. "</div>";

// <br> <h3>- Photo: </h3>" .$_FILES['photo'] - pour la photo

// var_dump($_POST);

if(
    (isset($_POST['titre'])==true ) &&
    (isset($_POST['description'])==true ) &&
    (isset($_POST['prix'])==true)) {
// !empty($_POST['photo']['name']
        $entry = new Articles_db;
        $entry-> titre =$_POST['titre'];
        $entry -> description=$_POST['description'];
        $entry -> prix=$_POST['prix'];
        // $entry -> photo=$_POST['photo'];
        $entry-> save();

    } 


?>


<?php include ("footer.php"); ?>