<?php require_once("../includes/session.php") ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/admin_header.php"); ?>
<?php is_loggedIn(); ?>

<?php
get_selected_page();
if(!$current_page){
  $_SESSION["msg"] = "Not valid Page ";
    redirect("manage_content.php");
}
?>


<?php

$query = "DELETE FROM pages WHERE id = {$_GET["page"]}
LIMIT 1";
$result_del_page = mysqli_query($conn,$query);

if($result_del_page && mysqli_affected_rows($conn) === 1){
    $_SESSION["msg"] = "The Page {$current_page["page_name"]} was Deleted successfuly";
    redirect("manage_content.php");
}else{
  $_SESSION["msg"] = "The Page {$current_page["page_name"]} Delete operation was Failed";
  redirect("manage_content.php");
}

?>
<?php include("../includes/layouts/admin_footer.php");?>
