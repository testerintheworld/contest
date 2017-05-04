<html>
<head>
	<title> Concole </title>
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
  <div id="general_content" style="width: calc( 100% - 20px );">  
  <?php if ($type == 1) { ?>
    <div id="post">
      This is Concole. This page is in test mode.
    </div>
    <?php } else {
  header('URL=error.php');
  } ?>
  </div>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>