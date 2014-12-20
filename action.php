<?
include "connect.php";

$name = mysql_escape_string($_POST['name']);
$surname = mysql_escape_string($_POST['surname']);
$secondname = mysql_escape_string($_POST['secondname']);
$email = mysql_escape_string($_POST['email']);
$phone = mysql_escape_string($_POST['phone']);
$cardstore = mysql_escape_string($_POST['cardstore']);
$login = mysql_escape_string($_POST['login']);
$password = mysql_escape_string($_POST['password']);
$newpassword = md5($password);

$query = mysql_query("INSERT INTO clientbase(
						clientbase_name,
						clientbase_surname,
						clientbase_secondname,
						clientbase_phonenumber,
						clientbase_card,
						clientbase_login,
						clientbase_password,
						clientbase_email) 
						VALUES ('$name','$surname','$secondname','$phone','$cardstore','$login ','$newpassword','$email')");

if($query){
  header('Location:http://test.blackteg.ru/index.php');
}else{
  header('Location:http://test.blackteg.ru/registrationerror.php');
}
  exit;
?>
