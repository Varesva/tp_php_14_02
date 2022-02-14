<?php include ("header.php"); ?>

<?php

MonOrm();
require_once("Articles_db.php");
$entry = Articles_db::retrieveByPK($_GET['id']);

echo $entry-> titre;

?>
<?php include ("footer.php"); ?>