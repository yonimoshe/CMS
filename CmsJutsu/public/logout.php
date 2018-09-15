<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php

$_SESSION["msg"] = "Logged out succsesfully ,Hope to see you again {$_SESSION["admin_firstName"]} ";
$_SESSION["admin_id"] = null;
$_SESSION["admin_firstName"] = null;

redirect("login.php");
?>
