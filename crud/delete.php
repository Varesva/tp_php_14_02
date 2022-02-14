<?php include ("../header.php"); ?>
<?php MonOrm(); 
require_once("../Articles_db.php");

$id=$_GET['id'];

$entry = Articles_db::retrieveByPK($id);

$entry->delete();

echo "L'article a bien été supprimé.";
?>
<!-- 
<form action="../crud/deleteconf.php" method="POST">
        <br>
        <label for="titre">Entrer le titre de l'article à supprimer: </label>
        <input type="text" name="titre" placeholder= "Vélo BMX neuf" required maxlength="20">
        <br>
        <input type="submit" value="Supprimer cet article?">
    </form>


 -->



<?php include ("../footer.php"); ?>