<?php include "connect.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Контакты</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include "log_form.php";
?>
<table width="100%" border="0">
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
      <td valign="top" ><h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>        <h3><a href="Complect.php">Комплектующие</a></h3>        <h3><a href="OtherTech.php">Другая техника</a></h3></td>
      <td colspan="5">
<?php 
$query = mysql_query("SELECT * FROM feedback") or die(mysql_error());

    echo '<table cellpadding="5" cellspacing="0" align="center" border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Номер</th>';
	echo '<th>Имя</th>';
	echo '<th>Телефон</th>';
	echo '<th>E-Mail</th>';
	echo '<th>Skype</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	while($row = mysql_fetch_assoc($query)){ 
		echo '<tr>';
		echo '<td>' . $row['feedback_id'] . '</td>';
		echo '<td>' . $row['feedback_nameoperator'] . '</td>';
		echo '<td>' . $row['feedback_phonenumber'] . '</td>';
		echo '<td>' . $row['feedback_email'] . '</td>';
		echo '<td>' . $row['feedback_skype'] . '</td>';
		echo '</tr>';
	}
    echo '</tbody>';
	echo '</table>';
?>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
