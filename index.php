<?php
include "connect.php";
include "createtable.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Главная</title>
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
      <th width="22.5%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="About.php">О компании</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Reviews.php">Отзывы</a></h2></th>
    </tr>
    <tr>
      <td valign="top">
      <h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>
      <h3><a href="Complect.php">Комплектующие</a></h3>
      <h3><a href="OtherTech.php">Другая техника</a></h3>
      </td>
      <td colspan="5"><div class="news">
          <div class="news"><img class="news" src="images/BillMogrige.jpg" width="400" height="200" alt=""/>
          
       <?php
	  $query = mysql_query("SELECT text FROM dbtext WHERE id='3'");
	  $data = mysql_fetch_array($query);
	  echo $data['text'];
      ?>
          </div>
          <p class="news">&nbsp;</p>
        </div>
        <p class="news">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
