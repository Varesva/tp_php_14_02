<?php include ("../header.php"); ?>

<?php

$titre-> titre =$_POST['titre'];
$description -> description=$_POST['description'];
$prix -> prix=$_POST['prix'];
$id=$_POST['id'];

MonOrm();
require_once("../Articles_db.php");

$entry = Articles_db::retrieveByPK($_POST['id']);

$entry-> titre =$titre;
$entry -> description=$description;
$entry -> prix=$prix;
$entry-> save();

?>
<?php include ("../footer.php"); ?>