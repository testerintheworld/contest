<html>
<head>
	<title> Bug-tracker </title>
<style>
    textarea#addnews{
        width: 100%;
        min-height: 40px;
        resize: none;
    }
    button#addbug{
        margin-top: 20px;
        border-radius: 5px;
        border: 1px solid #555;
        box-shadow: 0 0 10px #333;
        background: #669;
        color: white;
        padding: 4px;
    }
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
<div id="body">
  <div id="general_content">  
   <div id="post">
     <h1>Баг-трекер</h1>
     <form action="successBug.php" method="POST">
      <textarea name="bugtr" title="Введите текст Вашего бага" id="addnews" cols="40" rows="5"></textarea>
      <button id="addbug"><b>Поделиться багом</b></button>
     </form>
   </div>
   <div id="post">
   <h1>Что такое баг-трекер</h1>
   Баг-трекер или система отслеживания ошибок (англ. bug tracking system) — прикладная программа, разработанная с целью помочь разработчикам программного обеспечения (программистам, тестировщикам и др.) учитывать и контролировать ошибки и неполадки, найденные в программах, пожелания пользователей, а также следить за процессом устранения этих ошибок и выполнения или невыполнения пожеланий.
   <br>Более подробно можно посмотреть <a href="https://ru.wikipedia.org/wiki/Система_отслеживания_ошибок" target="_blank">здесь</a>.
   <img src="https://pp.userapi.com/c639517/v639517480/1ddcf/TxIezp7oEZM.jpg" alt="Баг-трекер">
   </div>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>