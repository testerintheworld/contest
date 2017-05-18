<!DOCTYPE html>
<html>
<head>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<style type="text/css">
   table{
    border-collapse: collapse;
    width: 100%;
   }
   td, th {
    padding: 3px;
    border: 2px solid black; 
    vertical-align: baseline;
   }
   div#sendResult{
	border: 1px solid #333;
    width: calc( 100% - 20px );
	padding: 10px; 
	box-shadow: 0 0 20px #333;
    margin-bottom: 10px;
   }
   div#sendR{
   	margin-top: 10px;
   	color: black;
   	padding: 3px;
   }
   div#sendR:hover{
   	color: #050505;
   	background: #EEE;
   	border-radius: 5px;
   }
   div#post div#infoTask{
   	text-align: center;
   	color: #767676;
   	display: block;
   }
</style>
<script type="text/javascript">
function sendResult() {
	$("#sendResult").slideDown('fast',changeclass())
	$("#sendR").slideUp('fast',changeclass())
}
function hideResult() {
	$('#sendR').slideDown('fast',changeclass())
	$('#sendResult').slideUp('fast',changeclass())
}
function changeclass() {}
</script>
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<?php if (isset( $_GET['number'] ) == true ) {
	$id = $_GET['number'];	
	$test = true;
} else {
  header('Refresh: 10; URL=index.php;');
	$test = false;
}
	?>
	<title>
		<?php  if ($test) {echo("Задача №".$id);} else {echo("Неверный параметр");};?>
	</title>
</head>
<body>
    <?php
        include('srchead');
    ?>
<div id="body" style="min-height: 823px;">
  <div id="general_content">  
  
<?php 
	if ($test == false) {
		echo("Неверный параметр номера задачи. Через 10 секунд Вы будете перенаправлены на <a href=\"index.php\">Главную</a> страницу");
	}
	else { 
include("tasks");
if (isset($task[$id-1])) {
	?>
<div id="post">
	<h1><?php echo $task[$id-1]['title'];?></h1>
	<div id="infoTask">
	<?php echo("Тип: ".$task[$id-1]["type"]."<br>Максимальная память: ".$task[$id-1]["max"]."<br>Максимальное время работы: ".$task[$id-1]["timeWork"]."<br>Максимальное количество баллов за задачу: ".$task[$id-1]["maxBall"]."<br>Уровень задачи: ".$task[$id-1]["level"]."<br><br>");?>
	</div>
	<?php echo $task[$id-1]['text'].'<h4>Входные данные</h4>'.$task[$id-1]['inpDate']."<h4>Выходные данные</h4>".$task[$id-1]['outpDate'];?>
	<table>
		<tbody>
			<tr>
				<td>Входные данные</td>
				<td>Выходные данные</td>
			</tr>
			<?php 
			for ($i = 0; $i < count($task[$id-1][0]); $i++) {
			?>
			<tr>
				<td>
					<?php echo $task[$id-1][0][$i][0];?>
				</td>
				<td>
					<?php echo $task[$id-1][0][$i][1];?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div id="sendR">
		<a onclick="sendResult()">Отправить решение</a>
	</div>
</div>
<div id="sendResult" style="display: none;">
<form action="inputfile.php" enctype="multipart/form-data" method="POST">
	Выберите язык: 
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<select name="language">
		<option selected>FPC</option>
		<option>C++ 11</option>
	</select>
	<input type="file" name="file">
    <button>Отправить</button>
<a onclick="hideResult()" style="text-align: right; float: right;">Скрыть</a>
</form>
</div>
<a href="train.php">Назад в архив</a>
	<?php
} else {
?>

Sorry, but this page not found. Go to the <a href="index.php">main</a> page.


<?php } }?>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>