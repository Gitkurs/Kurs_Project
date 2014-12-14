<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?
require "connect.php";

mysql_query("
CREATE TABLE blog( id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
					tema VARCHAR(255),
					text TEXT,
					date TIMESTAMP,
					INDEX(tema)
				) DEFAULT CHARSET=cp1251;"
			);
	echo mysql_error();
		
echo "install";	
?>

<br> Ready! <br/>   


</body>
</html>
