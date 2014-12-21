<?php include "connect.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Логин</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" height="100%" border="0">
  <tbody>
    <tr>
      <th width="10%" scope="col"><a href="index.php"><img src="images/D-roll.jpg" width="111" height="93" alt=""/></a></th>
      <th width="18%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="18%" scope="col"><h2><a href="About.php">О проекте</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Reviews.php">Отзывы</a></h2></th>
    </tr>
    <tr>
      <td valign="top" ><h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>        <h3><a href="Complect.php">Комплектующие</a></h3>        <h3><a href="OtherTech.php">Другая техника</a></h3></td>
      <td colspan="5">
      <div class = "log">
        <p align="right">&nbsp;</p>
 <form action="action.php" method="post" name="formInput">
 <?php 
 if($_SESSION['regerror']) 
  	echo "<p align=\"center\" style=\"color:red\">Такой логин или email уже зарегестрирован</p>";
?>
        <p align="right">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" required>
          </p>
          <p align="right">
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" id="surname" required>
          </p>
          <p align="right">
            <label for="secondname">Отчество:</label>
            <input type="text" name="secondname" id="secondname" required>
          </p>
          <p align="right">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
          </p>
          <p align="right">
            <label for="phone">Телефон:</label>
            <input type="tel" pattern="^\d{11}$" name="phone" id="phone" required>
          </p>
           <p align="right">
            <label for="cardstore">Номер карты:</label>
            <input type="text" name="cardstore" id="cardstore">
          </p>
          <p align="right">
            <label for="login">Логин:</label>
            <input type="text" name="login" id="login" required>
          </p>
          <p align="right">
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
          </p>
          <p align="right">
            <input type="submit" name="submit"  value="Ввод">
          </p>
        </form>
        <p align="right">&nbsp; </p>
      </div>
      <p>&nbsp;</p>

      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
