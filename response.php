<?php 
define("DB_USER","yeospace_nm0206");
define("DB_PASSWORD","gn2895");
define("DB_HOST","www.yeospace.com");
define("DB_NAME","yeospace_nm0206");
$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>
<html>
<body>
<form action="response.php" method="post">
 Enter your Comment : 
 <input type="text" name="yourName"></input>
 <input type="submit" name="submit1" value="SUBMIT"></input></b> <td><input type="submit" name="submit4" value="Display"></input>
 <br/><br/>
 <a href='Search.php'>Go Back to Search page</a> </br>
<?php 
if(isset($_POST["submit1"]))
{
	$insert_row = $dbc->query("INSERT INTO CommentDB (Comment) VALUES('$_POST[yourName]')");
}
if(isset($_POST["submit4"]))
{
	$res=mysqli_query($dbc,"SELECT * FROM CommentDB order by ID DESC");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Comment"; echo "</th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>".$row["Comment"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><a href=delete.php?id=".$row['ID'].">Delete</a></td>";
		echo "<td><a href='edit.php?edit=".$row['ID'].">Edit</a></td>";
	    echo "</tr>";
	}
}
?>


</form>
</body>
</html>