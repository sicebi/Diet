<?php
include_once("../config/db.php");
session_start();

if (isset($_POST['submit'])) {

	$blood= $_POST['blood_type'];
	$target= $_POST['target_group'];
	$food= $_POST['food_type'];
	$benefits= $_POST['benefits'];
	$emailorphone= $_SESSION['emailorphone'];
	//$img = $_POST['foodimg_url'];
	
	//Check if the file is well uploaded

	if($_FILES['file']['error'] > 0) { echo 'Error during uploading, try again'; }


	//We won't use $_FILES['file']['type'] to check the file extension for security purpose


	//Set up valid image extensions

	$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );

	//Extract extention from uploaded file

		//substr return ".jpg"

		//Strrchr return "jpg"

	$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;

	//Check if the uploaded file extension is allowed

	if (in_array($extUpload, $extsAllowed) ) { 

	//Upload the file on the server

	$name = "../img/{$_FILES['file']['name']}";

	$result = move_uploaded_file($_FILES['file']['tmp_name'], $name);

// 	if($result){echo "<img src='$name'/>";}
// } else { echo 'File is not valid. Please try again'; 
}

	
try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$adminAdd ="INSERT INTO `food`(`foodimg_url`, `emailorphone`, `target_group`, `blood_type`, `food_type`, `benefits`) VALUES ('$name', '$emailorphone', '$target', '$blood', '$food', '$benefits')";
	//$adminAdd ="INSERT INTO `food`(`foodimg_url`) VALUES ('$file')";
	$conn->exec($adminAdd);

    

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

exit;

}
$_SESSION['error'] ="Food Record has been succesfull Added .....";
header("Location: ../form/add-food.php");
}

?>

