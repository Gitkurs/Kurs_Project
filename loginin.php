<?php
include "connect.php";

$loginname = mysql_escape_string($_POST['loginname']);
$loginpassword = mysql_escape_string($_POST['loginpassword']);
$loginpassword = md5($loginpassword);

$loginnameOk = mysql_query("SELECT * FROM clientbase WHERE clientbase_login = '$loginname' AND clientbase_password = '$loginpassword' ") or die(mysql_error());

if(mysql_num_rows($loginnameOk))
{
	$_SESSION['name'] = $loginname;
}
$URL = $_SERVER['HTTP_REFERER'];
header('Location:'.$URL);	

exit;
?>