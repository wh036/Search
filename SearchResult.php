<html>
<head>
<title>Searched Results</title>
<head>

<body>
<?php 
define ("DB_USER", "yeospace_nm0206"); //user name
define ("DB_PASSWORD", "gn2895"); //password
define ("DB_HOST", "www.yeospace.com"); //server name
define ("DB_NAME", "yeospace_nm0206"); //database name

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if (empty($_POST["text1"])) {
    echo "<u><h2> No Result Found </h2></u>";
   }
else {
	echo "<u><h2> Search Results for </h2></u>";
$value = $_POST["text1"];
$sql = "SELECT * FROM `WatchDB` WHERE `Model` LIKE '%".$value."%' OR `Brand` LIKE '%".$value."%' OR `Colour` LIKE '%".$value."%'"; 
$result = mysqli_query($dbc, $sql);

if ($result) {
    while($row= mysqli_fetch_row($result))
    {
    	echo("<a href="."AppleSeries1.php?rowid=".$row[0].">$row[0]</a> | ".$row[1]." | ".$row[2]." | <img src=".$row[3]."height="."100"."width="."100".">");
    };
  }
}
mysqli_close ($dbc);
?>


<br><br><br><br><br><br> <a href='Search.php'>Home Page</a>

</body>
</html>