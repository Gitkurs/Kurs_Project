<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
echo "connect";

$DBASE = mysql_connect("localhost","AntonSchwarz","1372") or die("Could not connect: " .mesql_error());
mysql_select_db("antonschwarz") or die("Could not select database");
mysql_query("SET NAMES cp1251");
?>

</body>
</html>
