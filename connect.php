<?
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	$ConnectDB = mysql_connect("localhost","blackteg_test","12345678");
	mysql_select_db('blackteg_test',$ConnectDB);
?>