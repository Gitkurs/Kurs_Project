<?php
include "connect.php";
echo "<a href='Registration.php'>Registration.php</a>";

	/*header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","AntonSchwarz","1372");
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