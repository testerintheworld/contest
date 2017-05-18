<html>
<head>
	<title>Новости</title>
<style>
    #body a.id_news{
        float: right;
        font-size: 15px;
        margin-top: -40px;
    }
    textarea#addnews{
        width: 100%;
        min-height: 40px;
        resize: none;
    }
    h2{
        -webkit-margin-before: 0.2em;
        -webkit-margin-after: 0.2em;
    }
    div#addNews{
        border: 1px solid #333;
        width: calc( 100% - 20px );
        padding: 10px; 
        box-shadow: 0 0 20px #333;
        margin-bottom: 10px;
    }
    button#addnews{
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
    function addnews() {
        $("#addNews").slideDown('fast', changeclass)
        $("#block_post").slideUp('fast', changeclass)
    }
    function closeNews() {
        $("#addNews").slideUp('fast', changeclass)
        $("#block_post").slideDown('fast', changeclass)
    }
    function changeclass() {}
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php 
    include('srchead');?>
<div id="body">
    <?php
    function defender_xss($arr){
    $filter = array("<", ">");  
     foreach($arr as $num=>$xss){
        $arr[$num]=str_replace ($filter, "|", $xss);
     }
       return $arr;
} 
//используйте  функцию перед обработкой входящих данных:
$_REQUEST=defender_xss($_REQUEST);
    include('textnews');
    if ((isset($_GET['id']))) {
        if (($_GET['id']>=1)and($_GET['id']<=count($array))) {
    $post = $_GET['id'];
    ?>
  <div id="general_content">
    <div id="post">
        <h1>
            <?php 
            echo ($array[$post-1]['title']); ?>
        </h1>
        <div id="st_news">
            <?php 
            echo ($array[$post-1]['text']);?>
        </div>
        <div id="author">
            <?php 
            echo ($array[$post-1]['author']);?>
        </div>
    </div>
  </div>
    <?php
    }else{
        ?> <div id="general_content">
    <div id="post">
        Sorry, ID not found. Please, write <a href="mailto://ilya.kanyshev@mail.ru">administration</a>.
    </div><?php
    } }
    else {
        ?>
  <div id="general_content">
<?php if (($type < 4)and(isset($_GET['page']) == false)and(isset($_GET['id']) == false)) {?>
<div id="addNews" style="display: none;">
    <form action="addnews.php" method="POST">
        <h2>Новая запись:</h2> 
        <a class="id_news" onclick="closeNews()"><b>X</b></a>
        <i style="margin-left: 10px;"><b>Подсказка:</b> перед использованием кавычек <b>(")</b> ставьте <b>\</b> (иначе вся система слетит).</i><br>
        Название: 
        <textarea name="title" cols="40" rows="1" id="addnews"></textarea>
        Текст:
        <textarea name="comment" cols="40" rows="10" id="addnews"></textarea>
        Сокращенный текст:
        <textarea name="fastComment" cols="40" rows="3" id="addnews"></textarea>
        <button id="addnews">Отправить</button>
    </form>
</div>
<div id="block_post">
<?php if (($type < 4) and (isset($_GET['page']) === false) and (isset($_GET['id']) === false)) {
    ?> <a onclick="addnews()"><div id="post"><h1 style="border: 0px;padding: 0px; margin: 0px;">Отправить запись</h1></div></a> <?php
} ?>
<?php } ?> 
  </div>
  <?php 
  $id = 3;
  include("text_news");
  ?>
</div>
    <?php } 
?> 
<?php if (isset($_GET['page']) === false) {?>
<?php } 
    include('srcnews');
    ?>
</div>
    <?php include("srcfooter");
    ?>
</body>
</html>