<html>
<head>
	<title>Соревнования | Project</title>
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
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<link type="text/css" rel="stylesheet" href="assest/css/contest.css">
</head>
<body>
    <?php include('srchead'); ?>
<div id="body">
  <div id="general_content">
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
        echo("<td class=\"default\">х".$array[$i]['regpeople']." Зарегистрировано<br><a href=\"regcontest.php?id=\"".$array[$i]['id'].">Зарегистрироваться</a></td>");
        echo("</tr>");
    }
    ?>
    </tr>
</tbody>
</table>
  </div>
    <?php
        include('srcnews');
    ?>
</div>
    <?php include("srcfooter");
    ?>
</body>
</html>