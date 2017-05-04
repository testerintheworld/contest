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
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
    $('st_news').shorten({
    moreText: 'Читать полностью',
    lessText: 'Свернуть',
    showChars: '50'
});
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php 
    include('srchead');?>
<div id="body">
    <?php
    if (isset($_GET['id'])) {
    $post = $_GET['id'];
    include('textnews');
    ?>
  <div id="general_content">
    <div id="post">
        <h1>
            <?php 
            echo ($array[$post-1]['title']); ?>
        </h1>
        <a class="id_news">ID: <?php echo ($post); ?></a>
        <div id="st_news">
            <?php 
            echo ($array[$post-1]['text']);?>
        </div>
        <div id="author">
            <?php 
            echo ($array[$post-1]['author']);?>
        </div>
    </div>
    <a href="news.php">Вернуться к новостям</a>
  </div>
    <?php
    }
    else {
        ?>
  <div id="general_content">
<?php if (($type < 4)and(isset($_GET['page']) == false)and(isset($_GET['id']) == false)) {?>
<div id="post">
    <form action="addnews.php">
        <h2>Новая запись:</h2> 
        <textarea name="comment" cols="40" rows="3" id="addnews"></textarea>
        <button>Отправить</button>
    </form>
</div>
<?php }

  $id = 3;
  include("text_news");
  ?>


  </div>
    <?php } 
    include('srcnews');
    ?>
</div>
    <?php include("srcfooter");
    ?>
</body>
</html>