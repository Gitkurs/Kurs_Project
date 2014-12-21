<?php include "connect.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ноутбуки и пк</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include "log_form.php";
?>
<table width="100%" border="0" height="100%">
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
      <td valign="top" ><h3><a href="Notebooks.php">Ноутбуки и ПК</a></h3>        <h3><a href="Complect.php">Комплектующие</a></h3>        <h3><a href="OtherTech.php">Другая техника</a></h3></td>
      <td colspan="4"><form id="form1" name="form1" method="post">
        Поиск:
        <input type="search">
      </form>
        <div class="good"><img class="good" src="images/notebook.jpg" alt=""/>Ноутбук ASUS N61Vg создан специально для аудиофилов, которые даже в   дороге не хотят расставаться с музыкой. В нем реализована разработанная   специалистами ASUS технология SonicMaster, представляющая комплекс   аппаратных и программных средств улучшения качества звука. Хорошей   детализации звуковой сцены способствуют специальные резонансные камеры, а   2,5-ваттный усилитель улучшает воспроизведение звука через аудиосистему   производства Altec Lansing. </div>        
        <p class="news">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>