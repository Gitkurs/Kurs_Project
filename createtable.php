<?php
header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","blackteg_test","12345678");
	if(!mysql_select_db('blackteg_test',$ConnectDB))
	{
		$CreateDBMYSQL = 'CREATE DATABASE blackteg_test';
		if(mysql_query($CreateDBMYSQL,$ConnectDB))
		{
			if(mysql_select_db('blackteg_test',$ConnectDB));
		}
	}
	
	mysql_query("CREATE TABLE IF NOT EXISTS clientbase(
			clientbase_id          INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			clientbase_name        VARCHAR(30) NOT NULL,
			clientbase_surname     VARCHAR(30) NOT NULL,
			clientbase_secondname  VARCHAR(30) NOT NULL,
			clientbase_phonenumber CHAR(11) NOT NULL,
			clientbase_card        CHAR(11) NOT NULL,
			clientbase_login       VARCHAR(50) NOT NULL,
			clientbase_password    VARCHAR(50) NOT NULL,
			clientbase_email       VARCHAR(50) NOT NULL,
			CONSTRAINT unq_email UNIQUE(clientbase_email),
			CONSTRAINT unq_login UNIQUE(clientbase_login),
			CONSTRAINT unq_phonenumber UNIQUE(clientbase_phonenumber)
			)") or die(mysql_query());
			
	mysql_query("CREATE TABLE IF NOT EXISTS employee(
			employee_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
			employee_name VARCHAR(15) NOT NULL,
			employee_surname VARCHAR(20) NOT NULL,
			employee_secondname VARCHAR(20) NOT NULL,
			employee_birthday DATE NOT NULL,
			employee_post VARCHAR(30) NOT NULL,
			employee_startedtowork DATE NOT NULL,
			employee_salary REAL NOT NULL,
			employee_phonenumber CHAR(11) NOT NULL
			)") or die(mysql_query());
?>