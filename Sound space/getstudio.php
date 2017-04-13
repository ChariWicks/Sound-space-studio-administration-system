
<?php

//soundspace getstudio

	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="soundspace"; 

	mysql_connect($host, $username, $password)or die("Cannot connect".mysql_error()); //create connection

	mysql_select_db($db_name)or die("cannot select DB"); //select database
?>

<html>

<head>
	<title>Studios Confirmation - 2015020</title>
</head>

<body>
</body>

</html>

<?php

	$sql = "SELECT studioId, studioName, studioAddress, studioPCode, studioTelNo FROM Studio ORDER BY Studio.studioId DESC LIMIT 3";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	
	echo '<b><h3>Studios Confirmation</h3></b><hr>';
	
	if($num_rows > 0){
		
		$index = 1;
		
			while($row = mysql_fetch_assoc($result)){
	
				echo $index.') ' .$row['studioName'].'<br>'. $row['studioAddress'].$row['studioPCode'].'<br>'.$row['studioTelNo'].'<br><br><hr>';
		        $index++;
		
			}
		
	}else{
		
		echo '0 results!!';
	}
	
	
?>