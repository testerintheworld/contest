<html>
<head>
	<title> Новое соревнование </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
    <?php if ($type == 1) {?>
    <div id="post">
    This function is available for you (in test mode).<br>
    Эта функция доступна для Вас (в тестовом режиме).
    </div>
<?php 
}
  else {
    ?> 
    <div id="post">
    Sorry, this function is not available (in test mode). After 5 seconds you will be redirected to the <a href="index.php">main</a> page.<br>
    К сожалению, эта функция не доступна (находится в тестовом режиме). Через 5 секунд вы будете перенаправлены на <a href="index.php">главную</a> страницу.
    </div>

    <?php
  header('Refresh: 5; URL=index.php');
  }
  ?>

  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>