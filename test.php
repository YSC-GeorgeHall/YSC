<?php

session_start();
require_once "config.php";
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
  $sql = "SELECT FROM advertisers where id='4'";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['dvdimage'];
?>

<html>
<body>
<img src="getImage.php?id=1" width="175" height="200" />
</body>
</html>