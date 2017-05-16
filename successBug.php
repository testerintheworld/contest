<html>
<head>
	<title> Баг опубликован </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
   <?php if (isset($_POST['bugtr'])) { 
    $mess = file_get_contents("bugs");
    file_put_contents("bugs", substr($mess, 0, strlen($mess) - 4)."\"".$_POST['bugtr']."\",\n);?>");
    ?>
   <div id="post">
   <h1>Баг опубликован!</h1>
   Спасибо, Ваш баг опубликован. В течение некоторого времени <a href="contact.php">администраторы</a> найдут способ решить эту проблему. <br><a href="bugtracker.php">Вернитесь</a>, чтобы послать еще 1 баг-репорт.
   </div>
   <div id="post">
   <h1>Текст вашего бага:</h1>
   <?php 

   echo($_POST['bugtr']);?>
   </div>
<?php }else {include('error.php');} ?>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>