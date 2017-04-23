<html>
<head>
	<title>Новости | Project</title>
<style>
    #body a.id_news{
        float: right;
        font-size: 15px;
        margin-top: -40px;
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
    if (isset($_GET['id'])==true) {
    $post = $_GET['id'];
    ?>
  <div id="general_content">
    <div id="post">
        <h1>Новость</h1><a class="id_news">ID: <?php echo ($post);
        ?></a>
        <img src="#" alt="this is image">
        <div id="st_id_news">
            It's news
        </div>
        <div id="author">
            It's author
        </div>
    </div>
  </div>
    <?php
    }
    else {
        ?>
  <div id="general_content">
  

  <?php 
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