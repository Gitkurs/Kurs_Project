<?php include "connect.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Отзывы</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include "log_form.php";
?>

<table height="100%" width="100%" border="0">
  <tbody>
    <tr>
      <th width="10%" scope="col"><a href="index.php"><img src="images/D-roll.jpg" width="111" height="93" alt=""/></a></th>
      <th width="18%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="18%" scope="col"><h2><a href="About.php">О проекте</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
      <th width="18%" scope="col"><h2><a href="Reviews.php">Отзывы</a></h2></th>
    </tr>
    <tr>
      <td valign="top" >
      <h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>        
      <h3><a href="Complect.php">Комплектующие</a></h3>        
      <h3><a href="OtherTech.php">Другая техника</a></h3></td>
      <td colspan="5" valign="top">
       <h5 align="center">Оставьте свой отзыв о нашей работе!</h5>
       
<?php
	if(!empty($_SESSION['name']))
	{
		$query = mysql_query("SELECT * FROM reviews") or die(mysql_error());

		while($row = mysql_fetch_assoc($query))
		{
			echo "<div class=\"review\" >";
			echo "<h5 class=\"review\"> ". $row['reviews_login'].": "."</h5>".$row['reviews_text'];
			echo "</div>";
		}
			echo "
			<form action=\"addreview.php\" method=\"post\" name=\"formInput\" >
			<textarea name=\"textarea\" maxlength=\"300\" cols=\"100\" rows=\"5 \" placeholder=\"Место для отзыва\"  id=\"textarea\"></textarea>
			<br><input  type=\"submit\" name=\"enterreview\" value=\"Оставить отзыв\">
			</form>
			";
	}
	else
		echo "<h5 align=\"center\"  style=\"color:red\" >Войдите на сайт или зарегистрируйтесь!</h5>";
?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
