<?php
// Connection
define("HOST","server");
define("USER","username");
define("PASSWORD","*******");
define("DB_NAME","db_cmsjutsu");

$conn = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
if(!$conn){
  die("Eror in db connection" . mysqli_connect_error($conn) . mysqli_connect_errno($conn) );
}

?>
