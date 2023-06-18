<?php 
define ("DB_USER", "yeospace_nm0206"); //user name
define ("DB_PASSWORD", "gn2895"); //password
define ("DB_HOST", "www.yeospace.com"); //server name
define ("DB_NAME", "yeospace_nm0206"); //database name

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbc) {
   die("Connection failed: " . mysqli_connect_error());
   }
   echo "Connected Successfully";

?>


<html>
<head>
	<title>Smart Watches By Brands</title>
	<link type="text/css" rel="stylesheet" href="style.css"/>	
</head>
<body>
	<h1><u>Smart Watches By Brands</u></h1>
	<br></br>
	
	<form name= "form1" action="SearchResult.php" method="post">
		
			
	<h2>Search Model:</h2>
	<input type="text" name="text1" id="text1"/>
			
			
	<input type="submit" name="submit" value="SUBMIT"/>
			
			
			
		
	
<h1>Apple</h1>	
<?php echo '<a href="ApplePage.php"><img src="apple.jpg" /></a>';?>
<h1>Asus</h1> 
<?php echo '<a href="AsusPage.php"><img src="asus.jpg" style="width: 270px;height: 275px;" /></a>';?>
<h1>Samsung</h1>
<?php echo '<a href="SamsungPage.php"><img src="samsung.jpg" style="width: 270px;height: 275px;" /></a>';?>

<center><h1>Please select a brand</h1></center>

</form>
</body>
<script type="text/javascript">
</script>
</html>