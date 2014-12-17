<?php
include "connect.php";
echo "<a href='Registration.php'>Registration.php</a>";

	/*header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","blackteg_test","12345678");
	if(!mysql_select_db('site_db',$ConnectDB))
	{
		echo "Ошибка соединения<br>";
		$CreateDBMYSQL = 'CREATE DATABASE site_db';
		if(mysql_query($CreateDBMYSQL,$ConnectDB))
		{
			echo "База успешно создана<br>";
			if(mysql_select_db('site_db',$ConnectDB)) echo "Подключение к базе успешно<br>";
			else echo "Ошибка соединения<br>";
		}
		 else echo "Ошибка при создании базы<br>";
	}
	else echo "Подключение к базе успешно<br>";
	
	mysql_query("CREATE TABLE if not exists users(
					idUser INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					name VARCHAR(30) NOT NULL,
					surname VARCHAR(30) NOT NULL,
					email VARCHAR(30) NOT NULL,
					password VARCHAR(30) NOT NULL
					)" );*/
				
					
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<label for="textfield">
  <div align="right">Логин:
    <input type="text" name="textfield" id="textfield">
    Пароль:
    <input type="password" name="password" id="password">
    <input type="button" name="button" id="button" value="Log in">
    <br>
  or:
  <a href="login.html"> <input type="button" name="button2" id="button2" value="Register now!"> </a>
  </div>
</label>
<div align="right"></div>
<label for="password">
  <div align="right"></div>
</label>
<div align="right"></div>
<table width="100%" border="0" height="100%">
  <tbody>
    <tr>
      <th width="8%" scope="col"><a href="index.html"><img src="images/D-roll.jpg" width="111" height="93" alt=""/></a></th>
      <th width="23%" scope="col"><h2><a href="index.html">Главная</a></h2></th>
      <th width="23%" scope="col"><h2><a href="About.html">О компании</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Actions.html">Акции</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
    </tr>
    <tr>
      <td valign="top" ><h3><a href="#">Ноутбуки и ПК</a></h3>        <h3><a href="#">Комплектующие</a></h3>        <h3><a href="#">Периферия</a></h3></td>
      <td colspan="4"><p class="news">&nbsp;</p>
        <div class="news">
          <div class="news"><img class="news" src="images/BillMogrige.jpg" width="400" height="200" alt=""/>
            <p class="news">В Сан-Франциско скончался от рака британский промышленный дизайнер Билл Могридж (Bill Moggridge), передает Associated Press. Ему было 69 лет. </p>
            <p class="news">Могридж спроектировал портативный компьютер Grid Compass, который считается одним из прообразов современного ноутбука. Устройство имело плоский дисплей и было выполнено в форм-факторе "книжка" - в сложенном состоянии экран закрывал собой клавиатуру.
              
              Grid Compass вышел в 1982 году и стоил 8150 долларов США. </p>
            <p class="news">Из-за высокой цены он не имел спроса у рядовых потребителей, но его закупали для своих нужд американские военные и агентство NASA. В 1985 году Grid Compass использовался на борту шаттла "Дискавери".
              
              Дизайн Grid Compass был запатентован, владельцем патента являлась компания Grid Systems. В 1988 году Grid Systems была куплена компанией Tandy Corporation.
              
              За создание Grid Compass Могридж получил несколько наград, включая Дизайнерскую премию принца Филиппа, которой он был удостоен в 2010 году. </p>
            <p class="news">С начала 1980-х годов дизайнер преподавал в Стэнфордском университете, а в 1991 году основал консалтинговую компанию Ideo. C 2010 года он занимал должность директора Национального музея дизайна в Нью-Йорке. </p>
          </div>
          <p class="news">&nbsp;</p>
        </div>
        <p class="news">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
