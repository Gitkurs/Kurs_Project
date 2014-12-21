<?php
include "connect.php";
$_SESSION['name'] = NULL;
$URL = $_SERVER['HTTP_REFERER'];
header('Location:'.$URL);	
?>
