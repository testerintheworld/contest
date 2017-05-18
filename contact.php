<html>
<head>
	<title> Контакты </title>
<link type="text/css" rel="stylesheet" href="assest/css/style.css">
<style>
div#one_person{
  width: 100%;
}
div#one_person h1{
  border: 0px;
  padding: 0px;
  margin-top: 0px;
}
div#one_person img{
  margin-left: 0px;
  margin-right: 0px;
  margin-top: -40px;
}
table{
  border-collapse: collapse;
  width: 100%;
}
td, th {
  padding: 3px;
  border: 2px double black; 
}
</style>
<script src="assest/js/jquery-3.2.0.min.js"></script>
<script>
</script>
<meta charset="utf-8">
</head>
<body>
<body>
    <?php
        include('srchead');
    ?>
<div id="body">
  <div id="general_content">  
  
    <div id="post">
      <h1>Контакты</h1>
      <div id="st_news">
        <div id="one_person">
          <h1>Илья Канышев</h1>
          <table style="width: 40%; float: left;">
            <tbody>
              <tr>
                <td>Должность:</td>
                <td>веб-разработчик</td>
              </tr>
              <tr>
                <td>Почта:</td>
                <td>
                  <a href="mailto://ilya.kanyshev@mail.ru">ilya.kanyshev@mail.ru</a>
                </td>
              </tr>
              <tr>
                <td>ВКонтакте:</td>
                <td>
                  <a href="https://vk.com/ilyakanyshev">Илья Канышев</a><br>
                </td>
              </tr>
            </tbody>
          </table>
          <img src="https://pp.userapi.com/c638529/v638529480/111ac/pdC41QzESq8.jpg" style="width: 50%; float: right;">
        </div>
        <div id="one_person">
          <h1 style="margin-left: 56%;">Егор Плотников</h1>
          <table style="width: 40%; float: right;">
            <tbody>
              <tr>
                <td>Должность:</td>
                <td>backend-разработчик, пентестер</td>
              </tr>
              <tr>
                <td>Почта:</td>
                <td>
                  <a href="mailto://egorplotnikov@mail.ru">egorplotnikov@mail.ru</a>
                </td>
              </tr>
              <tr>
                <td>ВКонтакте:</td>
                <td>
                  <a href="https://vk.com/crazy__as">Лукьян Печенько</a><br>
                </td>
              </tr>
            </tbody>
          </table>
          <img src="https://pp.userapi.com/c638928/v638928875/289e0/TA_NJaWuD1M.jpg" style="width: 50%; float: left;">
        </div>
      </div>
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