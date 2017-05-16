<html>
<head>
	<title>Соревнования </title>
<?php include("nearContest"); ?>
<style type="text/css">
   table{
    border-collapse: collapse;
    width: 100%;
   }
   td, th {
    padding: 3px;
    border: 2px solid black; 
   }
   div#newContest{
    border: 1px solid #333;
    width: calc( 100% - 20px );
    padding: 10px; 
    box-shadow: 0 0 20px #333;
    margin-bottom: 10px;
    display: block;
   }
   div#hrefNewContest{
    border: 1px solid #333;
    width: calc( 100% - 20px );
    padding: 10px; 
    box-shadow: 0 0 20px #333;
    margin-bottom: 10px;
    display: block;
  }
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<?php if ($type < 3) {?>
  <script>
    allowNewContest = true;
  function changeClass() {
    $(this).prev().toggleClass('active')
  }
  function newContest() {
    if (allowNewContest) {
      allowNewContest = false;
      $('#newContest').slideToggle('fast', changeClass)
      $('#table').slideToggle('fast', changeClass)
      $('#hrefNewContest').slideToggle('fast', changeClass)
    }
  }
  function closeNewContest() {
    if (allowNewContest == false) {
      allowNewContest = true;
      $('#newContest').slideToggle('fast', changeClass)
      $('#table').slideToggle('fast', changeClass)
      $('#hrefNewContest').slideToggle('fast', changeClass)
    }
  }
  </script>
<?php } ?>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<link type="text/css" rel="stylesheet" href="assest/css/contest.css">
</head>
<body>
    <?php include('srchead'); ?>
<div id="body">
  <div id="general_content">
  <?php if ($type < 3) {?> 
<div id="hrefNewContest">
  <a onclick="newContest()" style="display: block;">Новое соревнование</a>
</div>
    <?php } ?>
<div id="table">
<table>
<tbody>
    <tr>
        <td class="default">
            Название
        </td>
        <td class="default">
            Авторы
        </td>
        <td class="default"> 
            Начало
        </td>
        <td class="default">
            Длительность
        </td>        
        <td class="default">
            &nbsp;
        </td>
    </tr>
    <?php 
    $count  = count($array);
    for ($i = 0; $i < $count; $i++) {
        echo("<tr>");
        echo("<td class=\"name\">".$array[$i]['title']."</td>");
        echo("<td class=\"author\">".$array[$i]['author']."</td>");
        echo("<td class=\"start\">".$array[$i]['start']."</td>");
        echo("<td class=\"durability\">".$array[$i]['durability']."</td>");
        echo("<td class=\"default\"><a href=\"regcontest.php?id=".$array[$i]['id']."\">Зарегистрироваться</a></td>");
        echo("</tr>");
    }
    ?>
    </tr>
</tbody>
</table>
</div>
  <div id="newContest" style="display: none;">
    <form name="newContestServer" action="newContestServer.php" method="POST" style="text-align: left;">
      <legend class="inputBlock" style="width: 500px; margin-left: calc( 50% - 250px ); margin-right: calc( 50% - 250px );">
<?php include("nearContest"); ?>
        <legend class="inputBlock">
          Новое соревнование
        </legend>
        <legend class="inputBlock">
          Название:
          <input type="text" name="name" class="inpTextLogin">
        </legend>
        <legend class="inputBlock">
          Колличество задач:
          <input type="text" name="countQ" class="inpTextLogin">
        </legend>
        <button>Создать</button>
      </legend>
    </form>
    <a onclick="closeNewContest()" id="hrefNewContest" style="display: block;">Вернуться к соревнованиям</a>
  </div>
  </div>
    <?php
        include('srcnews');
    ?>
</div>
    <?php include("srcfooter");
    ?>
</body>
</html>