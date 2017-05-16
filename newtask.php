<html>
<head>
	<title> <?php if ($type < 3) {?>Новая задача<?php } else { ?> Error| Ошибка<?php } ?></title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php
        include('srchead');
    ?>
<?php include("tasks"); 
/*
$file = fopen('srctask','r'); #ТОЛЬКО НА ЧТЕНИЕ
fwrite($file, $text);
$text = file_get_contents("tasks");
fclose($file);
*/
?>
<div id="body">
  <div id="general_content" style="width: 100%;">  
    <div id="post"><! contenteditable="true">
      <?php if ($type < 3) {?>
        <form name="newtask" action="" method="POST">
          <a onclick="checktask()" style="left: 10px; bottom: 100px; position: fixed; border: 1px solid #333; border-radius: 50px; padding: 5px; background: #fff; z-index: 10;">Просмотр</a>
          <h1>Новая задача:</h1>
          Название:
          <input type="text" name="name" style="width: 100%;" value="<?php echo $_POST['name']?>">
          Текст задачи:
          <textarea name="text" style="width: 100%; height: 300px; resize: fixed;"><?php echo($_POST['text']);?></textarea>
          Входные данные:
          <textarea name="inputtext" style="width: 100%; height: 100px;"><?php echo($_POST['inputtext']);?></textarea>
          Выходные данные:
          <textarea name="outputtext" style="width: 100%; height: 100px;"><?php echo($_POST['outputtext']);?></textarea>
<?php      
if ((isset($_POST['name']))and(isset($_POST['text']))and(isset($_POST['inputtext']))and(isset($_POST['outputtext']))) {
   if (isset($_POST['k'])===false) {?> 
  <input type="range(1, 5)" name="k">
  <?php } else if ((isset($_POST['inp1']))and(isset($_POST['outp1']))) {?>
  <input type='hidden' name="k" value="<?php echo $_POST['k']?>"><table><tbody> <?php 
  for ($i=1; $i<=$_POST['k']; $i++) {
  ?> <td><tr><textarea name="inp<?php echo $i;?>"></tr><tr><textarea name="outp<?php echo $i;?>"></tr></td><?php
    ?> 
</tbody></table>
    <?php
  }
?> <?php } 
}
  ?>
          <button>Следующий шаг</button>
        </form>
        <?php } else { ?> Sorry, this page not found. After 5 seconds you will be redirected to the main page.<br>К сожалению, эта страница не найдена. Через 5 секунд вы будете перенаправлены на главную страницу.<?php } ?>
    </div>
  </div>
</div>
    <?php 
    include("srcfooter");
    ?>

</body>
</html>