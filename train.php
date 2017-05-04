<html>
<head>
	<title> Тренировки </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
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
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<link type="text/css" rel="stylesheet" href="assest/css/contest.css">
</head>
<body>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
		<table>
			<tbody>
			  <tr>
			    <td class="default">
			      №
			    </td>
			    <td class="default">
			      Название
			    </td>
			    <td class="default">
			      &nbsp;
			    </td>       
			  </tr>
			  <tr>
			    <td class="default">
			      1
			    </td>
			    <td class="default">
			      Бомбеж никиты
			    </td>
			    <td class="default">
			      <a href="problem.php?number=1">Решить</a>
			    </td>       
			  </tr>
			</tbody>
		</table>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>