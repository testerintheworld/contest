<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<?php if (isset( $_GET['number'] ) == true ) {
	$id = $_GET['number'];	
	$test = true;
} else {
  header('Refresh: 10; URL=index.php');
	$test = false;
}
	?>
	<title>
		<?php  if ($test) {echo("Задача №".$id." | Project");} else {echo("Неверный параметр");};?>
	</title>
</head>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
  
<?php 
	if ($test == false) {
		echo("Неверный параметр номера задачи. Через 10 секунд Вы будете перенаправлены на <a href=\"index.php\">Главную</a> страницу");
	}
	else {
?>

Sorry, but this page not found. Go to the <a href="index.php">main</a> page.



<?php } ?>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>