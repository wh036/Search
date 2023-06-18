<?php 
define("DB_USER","yeospace_nm0206");
define("DB_PASSWORD","gn2895");
define("DB_HOST","www.yeospace.com");
define("DB_NAME","yeospace_nm0206");
$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$sql = "DELETE FROM CommentDB WHERE ID='$_GET[id]'";
if(mysqli_query($dbc,$sql))
header("refresh:1; url=response.php");
else 
	echo "Not deleted";
?>
