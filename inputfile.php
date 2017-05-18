<?php
if ((isset($_FILES))and(isset($_POST['language']))) {
	include("srchead");
	include("srcStatPos");
	$k = count($stat);
	?>
	<html>
<head>
	<title> Загрузка файла </title>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
	<div id="body">
		<div id="general_content" style="width: 100%;">
			<div id="post">
	<h1 style="padding: 0px; border: 0px;">
	<?php 
	$url = $_FILES['file']['tmp_name'];
	$textCode = file_get_contents($url);
	$typeFile = $_POST['language'];
	?>Ваш файл загружен. Ждите результаты тестирования на странице <a href="stat.php">статуса посылки</a>.
	<?php
	$k++;
	settype($k,'string');
	mkdir("user_files/".$k."/");
	$dirr = "user_files/".$k."/";
	print_r($dir);
	if ($typeFile === 'FPC') {
		file_put_contents($dirr. "main.pas",$textCode);
		file_put_contents($dirr. "text.txt",$textCode);
		file_put_contents($dirr. "info",'pas \n '+$_POST['id']);
		file_put_contents($dirr. "result.txt",'Тестируется');
		settype($k,'int');
	} else if ($typeFile === 'C++ 11') {
		file_put_contents($dirr."main.cpp",$textCode);
		file_put_contents($dirr."text.txt",$textCode);
		file_put_contents($dirr."info",'cpp\n'+$_POST['id']);
		file_put_contents($dirr."result.txt",'Тестируется');
		settype($k,'int');
	}
	$textFile = file_get_contents("srcStatPos");
	$lengthTestFile = strlen($textFile);
	file_put_contents("srcStatPos", (substr($textFile, 0, $lengthTextFile - 4)."array( \n        \"ip\" => \"".$ip."\", \n        \"task\" => ".$_POST['id'].",\n        ),\n    );?>"));
	?></h1>
			</div>
		</div>
	</div>
<?php include("srcfooter"); ?>
</body>
</html>
<?php 
	$tmp_name = $_FILES['filename']['tmp_name'];
} else { include('error.php'); }

?>