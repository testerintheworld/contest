<?php include("srcaccount"); if ((isset($_GET["id"]))) { ?><html>
<head>
	<title> Просмотр программы </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body><?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content" style="width: 100%;">  
    <div id="post">
    <?php 
        $i = $_GET['id'];
        include("tasks");
        settype($i, 'int');
        include("srcStatPos");
        if (($stat[$i-1]["ip"] === $ip)or($type < 3)) {
          $code = file_get_contents("user_files/".$i."/text.txt");
          $language = file_get_contents("user_files/".$i."/language.txt");
          echo "<h1>Решение задачи. Посылка №".$i."</h1>"; 
          echo("Задача: <a href=\"problem.php?number=".$stat[$i-1]["task"]."\">".$stat[$i-1]["task"].") ".$task[$stat[$i-1]["task"] - 1]["title"]."</a>"); 
          echo("<br>Язык программирования: ".$language."<br>");
          echo "<pre>".$code."</pre>";
        } else {
          echo('<h1 style="margin: 0px; border: 0px;">Ошибка. Недостаточно прав. Просмотр недоступен.</h1>');
        } 
    ?>
    <br><a href="stat.php">Вернуться к посылкам</a><br><a href="train.php">Вернуться к задачам</a>
    </div>
  </div>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>
<?php } else {include ("error.php");} ?>