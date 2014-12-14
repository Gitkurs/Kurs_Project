<?
if($_COOKIE["pass"]!=="1372"){
	sleep(1);
	if(isset($_POST["pass"])){
		setcookie("pass",$_POST["pass"],time()+3600*24*14);
			die("Restart list");
			}	
?>
<html><head><title>ADMIN</title></head><body>
<form method="post">
<input type="password" name="pass" value="">
<input type="submit" name="submit" value="Password">
</form></body></html>
<?
  exit();
  }
?>

<br>
<form method="post">
<input type="text" name="find" value="">
<input type="submit" name="search" value="Find">
</form>

<?php
require "connect.php";

if(isset($_POST["search"])){
  $search=trim($_POST["find"]);
  $query = "SELECT * FROM blog WHERE tema LIKE '%$search%' ORDER by id DESC";
  $result = mysql_query($query);
  echo '<table>';
  while($row = mysql_fetch_array($result)){
    echo '<tr><td><a href="?id=',$row['id'],'">',$row['id'],'</a></td><td>',$row['tema'],
      '</td><td>',$row['text'],'</td></tr>';
  }
  exit();
}
// А это форма редактирования записи

if(!empty($_GET['id'])){  
  $query="SELECT * FROM blog WHERE id=$_GET[id]";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
}
// Добавление
if(isset($_POST['insert'])){
  $query="INSERT INTO blog (tema,text) VALUES ('$_POST[tema]','$_POST[text]')";
  mysql_query($query);
}
//Корректировка
if(isset($_POST['edit'])){
  $query="UPDATE blog SET tema='$_POST[tema]',text='$_POST[text]'  WHERE id='$_POST[id]'";
  $result = mysql_query($query);
  unset($row);  
}
//Удаление
if(isset($_POST['delete'])){
  $query="DELETE FROM text WHERE id='$_POST[id]'";
  mysql_query($query);
  unset($row);
}

echo<<<HERE
<form method="post"><table border="0">
<tr><td>id</td><td>$row[id]</td></tr>
<tr><td>Heading</td><td><input type="text" size=32 name="tema" value='$row[tema]'></td></tr>
<tr><td>Article</td><td><textarea name="text" cols=80 rows=2>$row[text]</textarea></td></tr>
<input type="hidden" name="id" value='$_GET[id]'>
<tr><td></td><td>
HERE;

if(!empty($_GET['id'])){
  echo ' <input type="submit" name="edit" value="Save">';
  echo ' <input type="submit" name="delete" value="Delete">';
}else{
  echo '<input type="submit"name="insert" value="Add">';
}
echo '</tr></table></form>';
?>
