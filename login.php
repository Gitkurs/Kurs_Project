<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Логин</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <th width="8%" scope="col"><a href="index.php"><img src="images/D-roll.jpg" width="111" height="93" alt=""/></a></th>
	  <th width="23%" scope="col"><h2><a href="index.php">Главная</a></h2></th>
      <th width="23%" scope="col"><h2><a href="About.php">О компании</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Actions.php">Акции</a></h2></th>
      <th width="23%" scope="col"><h2><a href="Contacts.php">Контакты</a></h2></th>
    </tr>
    <tr>
      <td ><h3><a href="#">Ноутбуки и ПК</a></h3></td>
      <td colspan="4" rowspan="3"><p>
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
        <input name="submit" type="submit" value="Ввод">
      </p>
      <p>&nbsp;</p>
      </form>
      </td>
    </tr>
    <tr>
      <td><h3><a href="#">Комплектующие</a></h3></td>
    </tr>
    <tr>
      <td><h3><a href="#">Периферия</a></h3></td>
    </tr>
  </tbody>
</table>
</body>
</html>
