<!DOCTYPE html>
<html lang="en">

  <head>

    
    <title>users </title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <style>
     #img_shap{
		border-radius:50px; 
	 }
     #delet{
		 background-color:red;
		 color:white;
		 padding:5%;
		 border-radius:5px;
		 border:2px solid white;
	 }
     #edit{
		 background-color:forestgreen;
		 color:white;
		 padding:5%;
		 border-radius:5px;
		 border:2px solid white;
	 } 
     table tr{
	   	 border:2px solid #E6E6E6;
	 }
     table tr th{
	   	 background-color:forestgreen;
		 color:white;
	     border:2px solid white;
	     font-size:1.5em;
	 }
    table tr td{
	     border:2px solid green;
		 text-align:center;
	 }	 
     table{
		 width:100%;
	 }	 
    </style>
	
	
  </head>

  <body>


<?php
include_once("../config/db.php");
session_start();
try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$req = $conn->prepare('SELECT `acc_id`, `fname`, `lname`, `gender` FROM `accounts` ');
	
	$req->execute();
	
	$users = $req->fetchAll();
	
	} catch (PDOException $e) {
	
	echo 'Error: '.$e->getMessage();
	
	exit;
	
	}
	
	if ($users) {
	
	echo "<div><b><u><center> USERS OF THE SYSTEM</u></center></b></div><br>";
	echo "<div> <b>";

	
	foreach ($users as $key => $users) {
	
	//echo "<hr/><b>ID: $users[acc_id] $users[fname] $users[lname] $users[gender] </b>";
	echo "
	<table>
		
		<tr></tr>

		<tr>
			<td> ID					</td>
			<td> FIRST NAME	</td>
			<td> LAST NAME	</td>
			<td> GENDER			</td> 
		</tr>
		
		<tr>
			 <td> $users[acc_id]	</td>
			 <td> $users[fname]		</td>
			 <td> $users[lname]		</td>
			 <td> $users[gender]	</td> 
		</tr>
	</table>
	
	<br>
	<br>
	<br>";

	
	}
	
	echo '</div>';
	
	}

?>
<center><a href="admin.php">Back</a></center>
  </body>

</html>

