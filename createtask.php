<?php 
include("srcaccount");
if ((isset($_POST['newtask']))and($type < 3)) {
	$text = $_POST['newtask'];

	$textFile = file_get_contents("tasks");
	$lengthTestFile = strlen($textFile);

	file_put_contents("tasks", substr($textFile, 0, $lengthTextFile - 4) + $text + ");?>")
	fclose($file);

} else {header('error.php');}

?>