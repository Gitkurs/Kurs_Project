<?php
include "connect.php";
include "page.php";
function main(){
  if(isset($_GET["id"])){
    $query = "SELECT * FROM blog WHERE id=" .$_GET["id"];
    $result = mysql_query($query);
    if(($r = mysql_fetch_array($result))){
      echo $r["text"];
      return;
    }
  }
  $query = "SELECT * FROM blog";
  $result = mysql_query($query);
  while($r = mysql_fetch_array($result)){
    echo "<a href=\"/?id=",$r["id"],"\">",$r["tema"],"</a><br>";
  }
}
?>
