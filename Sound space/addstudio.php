<?php

	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="soundspace"; 

	$connec = mysql_connect($host, $username, $password); //create connection
	
	if(!$connec){
	die('Cannot connect!!'.mysql_error());

	}
	

	mysql_select_db($db_name)or die("cannot select DB"); //select database
?>

<html>
<head>
	<title>Add a studio - 2015020</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form  action= "addstudio.php" method="post" autocomplete="off">


	<h4>Add studio</h4>
	
	<div>

	<table height="300" width="500" cellspacing="3" cellpadding="10" border=0 >
		<tr><td>* Studio Id Number</td><td ><input type="text" name="studioId" placeholder = "45" size = 35></td></tr>
		<tr><td>* Studio Name</td><td><input type="text" name="studioName" placeholder = "eg : Attic studios" size = 35></td></tr>
		<tr><td>* Studio Address</td><td><input type="text" name="studioAddress" placeholder = "eg : 3 Mount road, London" size = 35></td></tr>
		<tr><td>* Studio Postcode</td><td><input type="text" name="studioPCd" autocomplete = "on" placeholder = "NW48AK" size = 35 ></td></tr>
		<tr><td>* Telephone Number</td><td><input type="text" name="studioTel" placeholder = "0112713589" size = 35></td></tr>
		<tr><td><input type="submit" name="addSBt" value="Add Studio"></td>
		<td><input type="reset" name="clearB" value="Clear Form" ></td></tr>
		
	</table>
	
	</div>
	
</form>

</body>
</html>

<?php


		
	if(isset($_POST['addSBt'])){
		
	//capture the value inserted in the form's fields and posted through here
    //Store them in local variables
		
    $stuId = $_POST["studioId"];
    $stuName = $_POST["studioName"];
    $stuAddress = $_POST["studioAddress"];
    $stuPCd = $_POST["studioPCd"];
    $stuTel = $_POST["studioTel"];
	

	//check if any of the mandatory fields were not filled in
	if (empty($stuId) or empty($stuName) or empty($stuAddress) or empty($stuPCd) or empty($stuTel)){
		
		echo "<b>Please ensure all fields are filled!!</b>";
	}
	
	//check if studentId if a number
	else if(is_numeric($stuId)){
		
		$dupStuNm = mysql_query("SELECT studioName FROM Studio WHERE studioName='".$_POST['studioName']."'");
		$dupStuId = mysql_query("SELECT studioId FROM Studio WHERE studioId='".$_POST['studioId']."'");
		
		//check for duplicated data
		if(mysql_num_rows($dupStuNm) >0 or mysql_num_rows($dupStuId)){
			
			echo '<b>Studio name or studio Id are already Used. Please, enter another name or id!!</b>';
			
		}
		else if(mysql_errno($connec)==1064){
			
			echo "<br>Values entered for the location details are not valid.";
			
		}else{
			
			$addlocSQL =  "insert into Studio(studioId, studioName, studioAddress, studioPCode, studioTelNo) values('".$stuId."','".$stuName."','".$stuAddress."','".$stuPCd."','".$stuTel."')";
	
	        $resStu = mysql_query($addlocSQL);
	
			echo "Successfully Updated";
		}
			
	}else{
		
		echo "Studio ID number should not contain letters or symbols!!";
	}
	
	
	}
	
	
?>



						  



