<html>
<head>
	<title>  Error | Ошибка</title>
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
  
    <div id="post">
    Sorry, this page not found. After 5 seconds you will be redirected to the <a href="index.php">main</a> page.<br>
    К сожалению, эта страница не найдена. Через 5 секунд вы будете перенаправлены на <a href="index.php">главную</a> страницу.
    </div>
<?php 
  header('Refresh: 5; URL=index.php');
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