<html>
<head>
	<title> CodeGround </title>
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
<div id="body">
  <div id="general_content">  
   
   
    <?php 
    $id = 3;
    include("text_news");
    ?>


  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>