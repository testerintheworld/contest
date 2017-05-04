<html>
<head>
	<title> Виртуальный контест </title>
<style>
input.inpTextLogin{
  float: right;
}
legend.inputBlock{
  padding: 3px;
  width: 260px;
  margin: 7px;
  border: 1px solid #888;
  border-radius: 3px;
}
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
    <div id="post">
    <form name="loginVContest" action="javascript://loginContest()">
      <legend class="inputBlock" style="width: 280px; margin-left: calc( 50% - 140px ); margin-right: calc( 50% - 140px ); box-shadow: 0 0 10px #000; padding: 10px;">
        <legend class="inputBlock" style="border: 0px;">
          Вход в закрытый контест
        </legend>
        <legend class="inputBlock">
          Id 
          <input type="text" name="login" class="inpTextLogin">
        </legend>
        <legend class="inputBlock">
          Ваш id
          <input type="text" name="login" class="inpTextLogin">
        </legend>
        <legend class="inputBlock">
          Пароль
          <input type="password" name="password" class="inpTextLogin">
        </legend>
        <button>Войти</button>
      </legend>
    </form>
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