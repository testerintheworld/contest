<html>
<head>
	<title> О проекте </title>
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
  
    <div id="post">
      <h1>Project</h1>
      <div id="st_news">
        Приветствую Вас на <a href="index.php">проекте</a> - онлайн системе тестирования для проведения различных типов олимпиад по программированию. Для вас доступны следующие функции:
        <br>
        <ul>
          <?php if ($type < 3) { ?><li><a href="contest.php">Участие в созданных соревнованиях</a></li><?php } ?>
          <li><a href="train.php">Просмотр и решение архива задач</a></li>
          <?php if ($type < 3) { ?><li><a href>Просмотр и изменение задач (для модераторов и выше)</a></li> <?php } ?>
          <?php if ($type < 3) { ?><li><a href>Просмотр и изменение тестовых страниц системы (для модераторов и выше)</a></li> <?php } ?>
          <?php if ($type < 2) { ?><li><a href>Добавление и удаление участников администрации системы (только для администраторов)</a></li> <?php } ?>
          и т.д.
        </ul>
        Постепенно этот список будет расширяться (администратор серьезно взялся за проект).<br>
        По вопросам обращаться на <a href="mailto:ilya.kanyshev@mail.ru">почту администратора</a>
        <br>Администрация просит Вас ставить отзыв в специальной форме ниже (используя Ваш аккаунт в соцсети ВКонтакте)
        <?php $about = 1; ?>
      </div>
    </div>
    <div id="post">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?144"></script>

<script type="text/javascript">
  VK.init({apiId: 5996916, onlyWidgets: true});
</script>

<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>
    </div>

  </div>
  <?php
    include("srcnews");
?>
</div>
    <?php include("srcfooter");
    ?>

</body>
</html>