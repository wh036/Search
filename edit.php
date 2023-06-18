<?php
define("DB_USER","yeospace_nm0206");
define("DB_PASSWORD","gn2895");
define("DB_HOST","www.yeospace.com");
define("DB_NAME","yeospace_nm0206");
$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	if( isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$res= mysqli_query($dbc,"SELECT * FROM CommentDB WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newName']))
	{
		$newName = $_POST['newName'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE CommentDB SET Comment='$newName' WHERE id='$id'";
		if(mysqli_query($dbc,$sql))
		    header("refresh:1; url=response.php");
		    else
		        echo "Not Updated";
	}
	
 
?>
<form action="edit.php" method="POST">
Comment: <input type="text" name="newName" value="<?php echo (isset($row['Comment'])) ? $row['Comment']: '';?>"><br />
<input type="hidden" name="id" value="<?php echo (isset($row['ID'])) ? $row['ID']: '';?>">
<input type="submit" value=" Update "/>
</form>


