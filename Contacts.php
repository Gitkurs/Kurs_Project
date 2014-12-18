<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Контакты</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<label for="textfield">
  <div align="right">Логин:
    <input type="text" name="textfield" id="textfield">
    Пароль:
    <input type="password" name="password" id="password">
    <input type="button" name="button" id="button" value="Вход">
    <br>
  or:
  <a href="login.php"> <input type="button" name="button2" id="button2" value="Регистрация"> </a>
  </div>
</label>
<div align="right"></div>
<label for="password">
  <div align="right"></div>
</label>
<div align="right"></div>
<table width="100%" border="0">
  <tbody>
    <tr>
      <th width="8%" scope="col"><a href="index.php"><img src="images/D-roll.jpg" width="111" height="93" alt=""/></a></th>
      <th width="23%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="23%" scope="col"><h2><a href="About.php">О компании</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
    </tr>
    <tr>
      <td valign="top" ><h3><a href="#">Ноутбуки и ПК</a></h3>        <h3><a href="#">Комплектующие</a></h3>        <h3><a href="#">Периферия</a></h3></td>
      <td colspan="4">
      <?php
      include "connect.php";
	  $query = mysql_query("SELECT text FROM dbtext WHERE id='1'");
	  $data = mysql_fetch_array($query);
	  echo $data['text'];
      ?>      
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
