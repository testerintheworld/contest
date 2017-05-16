<html>
<head>
	<title> Concole </title>
<style>
   table{
    border-collapse: collapse;
    width: 100%;
   }
   td, th {
    padding: 3px;
    text-align: left;
    border: 2px solid black; 
   }
   #vk_comments, div#bugtracker{
    display: none;
    border: 1px solid #333;
    width: calc( 100% - 20px );
    padding: 10px; 
    box-shadow: 0 0 20px #333;
    margin-bottom: 10px;
   }
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
function hideAll() {
  $('div#bugtracker').slideUp('fast', changeclass)
  $('div#vk_comments').slideUp('fast', changeclass)
}
function changeclass() {}
function show(element_id) {
    hideAll()
    var text = '#' + element_id;
    $(text).slideDown('fast', changeclass)
}
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
  <?php if ($type < 3) {  include('bugs'); ?>
    <div id="post">
      <a onclick="show('bugtracker')" style="font-weight: bold; padding: 5px;">Баг-трекер</a>
      <a onclick="show('vk_comments')" style="font-weight: bold; padding: 5px;">Vk комментарии</a>



      <a onclick="hideAll()" style="font-weight: bold; padding: 5px;">Close all</a>
    </div>
    <div id="bugtracker" style="display: inline-block;">
    <h1>Bug-tracker</h1>
    <table><tbody>
    <tr>
      <td>Баг</td>
      <td>Текст</td>
    </tr>
      <?php include('bugs');
        for ($i = count($array); $i > max(count($array) - 5,0); $i--) {
          ?>
    <tr><td><?php echo($i); ?></td><td>
    <?php echo($array[$i-1]);?></td></tr>
<?php 
        }
      ?> </tbody></table>
<a style="float: right;">
    Всего багов: <?php echo(count($array));?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Показано: <?php echo min(count($array),5);?>
</a>
    </div>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?144"></script>
<script>
  function showHide(element_id) {
    $(element_id).slideToggle('fast', changeClass);
  }
</script>
<script type="text/javascript">
  VK.init({apiId: 5996916, onlyWidgets: true});
</script>
  <div id="vk_comments" style="padding: 0px; border-radius: 3px; padding-bottom: -10px;">

  </div>
  <script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 3, attach: "*"});
</script>
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