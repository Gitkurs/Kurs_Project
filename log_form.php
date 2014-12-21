<?php
echo "
<div align=\"right\" >";
if(empty($_SESSION['name']))
echo "
<form action=\"loginin.php\" id=\"form2\" name=\"form2\" method=\"post\">
  Логин:
    <input type=\"text\" name=\"loginname\" id=\"loginname\">
    Пароль:
  <input type=\"password\" name=\"loginpassword\" id=\"loginpassword\">
  <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Вход\">
  <br>
  или: <a href=\"login.php\">
    <input type=\"button\" name=\"button2\" id=\"button2\" value=\"Регистрация\">
</a> 
<label for=\"textfield\">
</form>";
else
echo $_SESSION['name']." (<a href=\"exit.php\">Выход</a>)";
echo "</div>";
?>