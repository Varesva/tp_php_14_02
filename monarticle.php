<?php include ("header.php"); ?>

<?php

MonOrm();
require_once("Articles_db.php");
$entry = Articles_db::retrieveByPK($_GET['id']);

echo "<p>".$entry-> titre."<br>".$entry-> prix."<br>". $entry->description."</p>";

?>
<?php include ("footer.php"); ?>