<?php
include "connect.php";
include "createtable.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Главная</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include "log_form.php";
?>

<table height="100%" width="100%" border="0">
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
      <td valign="top">
      <h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>
      <h3><a href="Complect.php">Комплектующие</a></h3>
      <h3><a href="OtherTech.php">Другая техника</a></h3>      </td>
      <td colspan="5"><div align="center">
        <h1>Санкт-Петербургский государственный электротехнический университет “ЛЭТИ” имени В.И. Ульянова (Ленина)</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>Курсовая работа по дисциплинам</h1>
        <h1>Технология разработки ПО и Технологии баз данных</h1>
        <h1>на тему: &quot;Разработка сайта с базой данных для интернет-магазина электроники&quot;</h1>
        <p align="left">Выполнили студенты группы №1372 факультета КТИ: Игнатьев Роман, Крылова Дарья, Лукашевич Андрей, Любкин Павел, Шварц Антон, Яковлева Маргарита</p>
        </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
