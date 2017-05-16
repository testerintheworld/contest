<?php 
include("srcaccount");
if ((isset($_POST['comment']))and($type < 4)and(isset($_POST['title']))and(isset($_POST['fastComment']))) {
	$text = $_POST['comment'];
	$fastText = $_POST['fastComment'];
	$title = $_POST['title'];

	$textFile = file_get_contents("textnews");
	$lengthTestFile = strlen($textFile);
	if ($type == 1) { $author = 'ilyakanyshev'; } else if ($type == 2){ $author = 'Moderation'; } else if ($type == 3) { $author = 'Editor'; }
	file_put_contents("textnews", (substr($textFile, 0, $lengthTextFile - 4)."\n    array( \"title\" => \"".$title."\",\n        \"text\" => \"".$text."\",\n        \"smartText\" =>\".$fastText."\", \n        \"author\" => \"".$author."\",)\n    ,);?>"));
?> 
Запись добавлена. Перейти в <a href="news.php">новости</a>.
<?php
} else {include('error.php');}

?>