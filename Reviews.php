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
      <th width="22.5%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="About.php">О компании</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
      <th width="22.5%" scope="col"><h2><a href="Reviews.php">Отзывы</a></h2></th>
    </tr>
    <tr>
      <td valign="top" >
      <h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>        
      <h3><a href="Complect.php">Комплектующие</a></h3>        
      <h3><a href="OtherTech.php">Другая техника</a></h3></td>
      <td colspan="4" valign="top">
      <div class="review">
        <h5 class="review">Пользователь [login] оставил отзыв!</h5>
        <p class="review"> Это просто самый офигительный сайт, который я когда-либо видел с своей жизни! Ничего подобного никто никогда не делал и не сделает ещё очень долго. Жаль, что в контактах не указаны адреса создателей, а то мне бы очень хотелось выразить им свою признательность и пожать им горло!</p>
      </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
