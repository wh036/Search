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
			
			
			
	
	<center><h1>Apple</h1></center>

<h1>Series 1</h1>
<?php echo '<a href="AppleSeries1.php"><img src="apple.jpg" /></a>';?>
<h1>Series 2</h1> 
<?php echo '<a href="AppleSeries2.php"><img src="apple2.jpg" /></a>';?>
<h1>Series 3</h1>
<?php echo '<a href="AppleSeries3.php"><img src="apple3.jpg" style="width: 270px;height: 275px;" /></a>';?>
    
<br><br><br><br><br><br> <a href='Search.php'>Home Page</a>

</body>
</html>