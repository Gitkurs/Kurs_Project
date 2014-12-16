<?
include "connect.php";

$name = $_POST['name'];

$surname = $_POST['surname'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$query = mysql_query("INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$password')") or die(mysql_error());

if($query)
	echo "Данные добавлены";
else echo "Данные не добавлены";

?>