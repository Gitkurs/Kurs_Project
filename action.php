<?
include "connect.php";

$name = mysql_escape_string($_POST['name']);
$surname = mysql_escape_string($_POST['surname']);
$email = mysql_escape_string($_POST['email']);
$login = mysql_escape_string($_POST['login']);
$password = mysql_escape_string($_POST['password']);

$query = mysql_query("INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$password')") or die(mysql_error());

if($query)
	echo "Данные добавлены";
else echo "Данные не добавлены";

?>