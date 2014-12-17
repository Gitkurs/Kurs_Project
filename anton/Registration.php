<? include "connect.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link href="Registration.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <th width="8%" scope="col"><img src="../D-roll.jpg" width="111" height="93" alt=""/></th>
      <th width="23%" scope="col"><h2><a href="#">Главная</a></h2></th>
      <th width="23%" scope="col"><h2><a href="#">О компании</a></h2></th>
      <th width="23%" scope="col"><h2><a href="#">Акции</a></h2></th>
      <th width="23%" scope="col"><h2><a href="#">Контакты</a></h2></th>
    </tr>
    <tr>
      <td ><h3>Ноутбуки и ПК</h3></td>
      <td colspan="4" rowspan="3">
      <form action="action.php" method="post" enctype="application/x-www-form-urlencoded" name="formInput">
      <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
      </p>
      <p>
        <label for="phone">Телефон:</label>
        <input type="text" name="phone" id="phone">
      </p>
      <p>
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name">
      </p>
      <p>
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" id="surname">
      </p>
        <p>
          <label for="login">Логин:</label>
          <input type="text" name="login" id="login">
        </p>
        <p>
          <label for="password">Пароль:</label>
          <input type="password" name="password" id="password">
      </p>
      <p>
        <input name="submit" type="submit" value="Enter">
      </p>
      <p>&nbsp;</p>
      </form>
      
      </td>
    </tr>
    <tr>
      <td><h3>Комплектующие</h3></td>
    </tr>
    <tr>
      <td><h3>Периферия</h3></td>
    </tr>
  </tbody>
</table>
</body>
</html>
