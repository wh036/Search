<?php 
define ("DB_USER", "yeospace_nm0206"); //user name
define ("DB_PASSWORD", "gn2895"); //password
define ("DB_HOST", "www.yeospace.com"); //server name
define ("DB_NAME", "yeospace_nm0206"); //database name

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


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
	<br></br>
	<br></br>
			
	
	<center><h1>Asus</h1></center>
	
<h1>ZenWatch 1</h1>
<?php echo '<a href="ZenWatch1.php"><img src="asus.jpg" style="width: 270px;height: 275px;" /></a>';?>

<h1>ZenWatch 2</h1>
<?php echo '<a href="ZenWatch2.php"><img src="asus2.jpg" style="width: 270px;height: 275px;" /></a>';?>

<h1>ZenWatch 3</h1>
<?php echo '<a href="ZenWatch3.php"><img src="asus3.jpg" style="width: 270px;height: 275px;" /></a>';?>
    
<br><br><br><br><br><br> <a href='Search.php'>Home Page</a>

</body>
</html>