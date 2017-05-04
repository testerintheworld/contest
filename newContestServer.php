<html>
<head>
	<title> Новое соревнование </title>
<style>
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
</head>
<body>
    <?php include("srcaccount");
    if ($type > 1) {
  header('URL=error.php');
    } else { ?> 
<div id="body">
  <div id="general_content" style="width: 100%;">  
    <div id="post">
    <form name="loginServerContest" action="javascript://">
    <?php 
      $name = $_POST['name'];
      $countQ = $_POST['countQ'];
      for ($i = 0; $i < $countQ; $i++) {
        ?>
        <legend>
          <?php echo($i."<br><input type=\"text\" name=\"question_".$i."\">");?>
        </legend>
        <?php
      }
    ?>
    </form>
    </div>
  </div>
</div>
<?php } ?>
</body>
</html>