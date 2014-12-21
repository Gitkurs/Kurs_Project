<?
include "connect.php";

$login = mysql_escape_string($_SESSION['name']);
$text = mysql_escape_string($_POST['textarea']);

$query = mysql_query("INSERT INTO reviews(
						reviews_login,
						reviews_text) 
						VALUES ('$login','$text')");
  header('Location:http://test.blackteg.ru/Reviews.php');
  exit;
?>