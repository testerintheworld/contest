<html>
<head>
	<title> Главная | Project</title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">
      <?php 
      include("srctextnews");
      ?>
  </div>
  <?php
    include("srcnews");
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