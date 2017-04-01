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
    <div id="post">
        <h1>Новость</h1>
        <img src="#" alt="this is image">
        <div id="st_news">
            It's newssgdhfusagdfgsdkfjgasdkjgfasdhgfjhsgadfjsdgfjkh
            asdflsdgfjsgdfjs
            sdfsdfsadfasdfsadf
            sadfsadfsdfsadf
            sadfsadfsadfsadf
            sadfsdaf asfasdf asfsadfsd shfd gfsdf dsuhfugsad ugsaiudgfiusdh ushgaiugdsiufgsdiugiso udiuhfierg isudhiusagdigdiughsadugfiusdg sdushdgu i
        </div>
        <div id="author">
            It's author
        </div>
    </div>
    <div id="post">
        <h1>Новость</h1>
        <img src="#" alt="this is image">
        <div id="st_news">
            It's news
        </div>
        <div id="author">
            It's author
        </div>
    </div>
  </div>
    <?php } 
    include('srcnews');
    ?>
</div>
<footer>
    <div id="left_footer">
        <div id="one_footer"><a href="#" class="footer">Bug-tracker</a></div>
        <div id="one_footer"><a href="#" class="footer"></a></div>
        <div id="one_footer"><a href="#" class="footer">Помощь</a></div>
    </div>
    <div id="center_footer">
        <div id="one_footer"><a href="#" class="footer">Rules</a></div>
        <div id="one_footer"><a href="#" class="footer">About project</a></div>
        <div id="one_footer"><a href="#" class="footer">Contact</a></div>
    </div>
    <div id="right_footer">
        <a class="name_footer">Язык</a>
        <div id="one_footer"><a href="#" class="footer">English</a></div>
        <div id="one_footer"><a href="#" class="footer">Русский</a></div>
    </div>
</footer>
<div id="footer">
    &copy; <a class="footer" href="about">Project</a> | All rights reserved
</div>
</body>
</html>