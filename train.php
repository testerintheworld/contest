<html>
<head>
	<title> Тренировки </title>
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<link type="text/css" rel="stylesheet" href="assest/css/contest.css">
<script src="assest/js/jquery-3.2.0.min.js"></script>
<style type="text/css">
   table{
    border-collapse: collapse;
    width: 100%;
   }
   td, th {
    padding: 3px;
    text-align: left;
    border: 2px solid black; 
   }
</style>
<meta charset="utf-8">
</head>
<body>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
		<table>
			<tbody>
			  <tr style="background: #99D;">
			    <td class="default" style="text-align: center;">
			      №
			    </td>
			    <td class="default">
			      Название
			    </td>
			    <td class="default" style="text-align: center;">
			      Уровень
			    </td>       
			    <td class="default">
			      Тип
			    </td>            
			    <td class="default">
			      &nbsp;
			    </td>       
			  </tr>
			  <?php  if ($type < 3) {
			  	?> 
			  	<tr>
				    <td colspan="5">
			  			<a href="newtask.php" style="display: block;">
				    		Создать задачу
				    	</a>
				   </td>
			  	</tr>
			  	<?php }
			  	include("tasks");
			  	$length = count($task);
			  	for ($i = $length; $i >= max($length - $length % 50,1); $i--) {
			  		?>
			  		<tr>
			  			<td class="default" style="text-align: center;">
			  				<?php echo $i; ?>
			  			</td>
			  			<td class="default">
			  				<?php echo $task[$i-1]["title"];?>
			  			</td>
			  			<td class="default" style="text-align: center;">
			  				<?php echo $task[$i-1]["level"];?>
			  			</td>       
			    		<td class="default">
			    			<?php echo $task[$i-1]["type"];?>
			    		</td>     
			  			<td class="default" style="text-align: center;">
			  				<?php echo("<a href=\"problem.php?number=".$i."\">Решить</a>");?>
			  			</td>
			  		</tr>
			  		<?php
			  	}
			  	?>
			</tbody>
		</table>
  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>