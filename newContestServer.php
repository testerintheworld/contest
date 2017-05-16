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
    <?php include("srcaccount");
    if (($type > 1)and(!isset($_POST['countQ']))and(!isset($_POST['name']))and($_POST['name'] === none)) {
  header('URL=error.php');
    } else if (($_POST['countQ'] >= 1)and($_POST['countQ'] <= 20)) { ?> 
      <style>
      textarea.check{
        width: 1116px;
        height: 100px;
      }
      </style>
<div id="body">
  <div id="general_content" style="width: 100%;">  
    <div id="post">
    <form name="loginServerContest" action="addContest.php">
    <?php 
      $name = $_POST['name'];
      $countQ = $_POST['countQ'];
      echo "<h1>Создать соревнование</h1><br>Название: ".$name."<br>Количество задач: ".$countQ;
      echo("<input type=\"hidden\" name=\"countQ\" value=\"".$countQ."\"><input type=\"hidden\" name=\"name\" value=\"".$name."\">");
      for ($i = 0; $i < $countQ; $i++) {
        ?>
        <legend>
          <?php echo(($i+1)." задача<br><textarea name=\"question_".$i."\" class=\"check\"></textarea>");
            if ($i < $countQ-1) {echo("<br><br>");}
          ?>
        </legend>
        <?php
      } ?>
      <br>
      <button>Создать соревнование</button>
    </form>
    </div>
  </div>
</div>
<?php } else {
        ?>
        <div id="body">
          <div id="general_content" style="width: 100%;">
            <div id="post">
              Error. Такой параметр недоступен.
              <br>
              Максимальное колличество задач - 20.
              <br>
              Минимальное колличество задач - 1.
              <br>
              <a href="contest.php">Вернуться назад</a>
            </div>
          </div>
        </div>
        <?php
      }
    ?> ?>
</body>
</html>