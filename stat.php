<html>
<head>
	<title> Статус посылок </title>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<style>
   table{
    border-collapse: collapse;
    width: 100%;
   }
   td, th {
    padding: 3px;
    border: 2px solid black; 
   }
   b.success{
    color: green;
    text-decoration: underline;
   }
   b.error{
    color: #D00;
   }
   td.result{
    text-align: center;
   }
</style>
</head>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content" style="width: 100%;">  
   <div id="post">
     <h1>Статус посылок</h1>
      <table>
        <tbody>
          <tr style="background: #99D;">
            <td class="default" style="text-align: center;">
              №
            </td>
            <td class="default">
              IP
            </td>
            <td class="default">
              Задача
            </td>
            <td class="default" style="text-align: center; width: 110px;">
              Уровень задачи
            </td>
            <td class="default" style="text-align: center;">
              Тип задачи
            </td>
            <td class="default" style="text-align: center;">
              Статус
            </td>
          </tr>
          <?php 
          include("tasks");
          include("srcStatPos");
          $length = count($stat);
          for ($i = $length; $i>max(0, (count($stat) - 40)); $i--) {
            if ($stat[$i-1]["ip"] == $ip) { ?>
            <tr style="background: #DDF;font-weight: bold;">
            <?php } else {
            ?><tr><?php
            }
            $resultFile = file_get_contents("user_files/".$i."/result.txt");
            ?>
              <td class="default" style="text-align: center;">
                <?php if (($stat[$i-1]["ip"] === $ip)or($type === 1)) {
                echo "<a href=\"seecode.php?id=".$i."\" style=\"color: black; text-decoration: none;\">".$i."</a>";
              } else {echo $i;}?>
              </td>
              <td class="default"><?php echo $stat[$i-1]["ip"]; ?></td>
              <td class="default"><?php echo("<a href=\"problem.php?number=".$stat[$i-1]["task"]."\">".$stat[$i-1]["task"].". ".$task[$stat[$i-1]["task"] - 1]["title"]."</a>"); ?></td>
              <td class="default" style="text-align: center;"><?php echo($task[$stat[$i-1]["task"]]['level']);?>
              <td class="default" style="text-align: center;"><?php echo($task[$stat[$i-1]["task"]]["type"]);?>
              <td class="result"><?php echo $resultFile; ?></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
   </div>
  </div>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>