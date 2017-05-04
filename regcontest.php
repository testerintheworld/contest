<html>
<head>
	<title> Регистрация на соревнование </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php include("srcaccount"); ?>
<?php if ((isset($_get['id']))and($type > 2)) { ?>
<div id="body" style="margin-top: 0px; min-height: calc( 100% - 44px )">
  <div id="general_content" style="width: 100%;"> 
    <form name="loginServerContest" action="javascript://" id="lgContest">
      <legend class="inputBlock" style="width: 280px; margin-left: calc( 50% - 140px ); margin-right: calc( 50% - 140px ); box-shadow: 0 0 10px #000; padding: 10px;">
<?php include("nearContest"); ?>
        <legend class="inputBlock" style="border: 0px;">
          Регистрация на соревнование
        </legend>
        <legend class="inputBlock">
          ID соревнования:
          <div class="inpTextLogin"><?php echo($_GET['id']);?></div>
        </legend>
        <legend class="inputBlock">
          Название:
          <div class="inpTextLogin">This is name of contest</div>
        </legend>
        <legend class="inputBlock">
          Login:
          <input type="text" name="login" class="inpTextLogin">
        </legend>
        <legend class="inputBlock">
          Пароль:
          <input type="password" name="password" class="inpTextLogin">
        </legend>
        <a onclick="loginContest()"><button>Войти</button></a>
      </legend>
    </form>
  </div>
</div>
<?php } else if ($type > 2) {
      include('srchead');
    ?>
<div id="body" style="margin-top: 0px; min-height: calc( 100% - 44px )">
  <div id="general_content"> 
    <div id="post">Error of input text. After 5 seconds you will be redirected to the <a href="index.php">main</a> page.<br>
    Ошибка передачи данных. Через 5 секунд вы будете перенаправлены на <a href="index.php">главную</a> страницу.
    </div>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>
<?php 
  header('Refresh: 5; URL=index.php');
  } else {
      include('srchead');
     ?>
    <div id="body">
      <div id="general_content" style="width: 100%;">
        <div id="post">
        </div>
      </div>
    </div>
</body>
</html>