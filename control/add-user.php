<?php
include_once("../config/db.php");
session_start();


if (isset($_POST['newProfileBtn'])) {

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$gender= $_POST['gender'];
$emailorphone= $_POST['emailorphone'];
$password= $_POST['password'];
$confirm_password= $_POST['conf_password'];


//check password strength

if (strlen($password) < 4)

{

$_SESSION['error'] ="Invalid Password or not Strong";

header("Location: ../form/add-user.php");

exit(); 

}
if ($password != $confirm_password)

{

$_SESSION['error'] ="Password Do not Match";

header("Location: ../form/add-user.php");

exit(); 

}

//connect and check user by colum return(id NO)

try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$req = $conn->prepare('SELECT * FROM accounts WHERE emailorphone = ?' );

	 $req->execute([$emailorphone]);

	 $Existemailorphone = $req->fetchColumn();

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

//exit;

}

//variable for usercolum (id) to check assume exist else not exist

if ($Existemailorphone)//check pass word
{
	$_SESSION['error'] ="Oops that account aready Exist ";

	header("Location: ../form/add-user.php");
	
	exit(); 
}else{

try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$adminAdd ="INSERT INTO `accounts`(`fname`, `lname`, `emailorphone`, `gender`, `password`) VALUES ('$fname','$lname','$emailorphone','$gender','$password')";
	$conn->exec($adminAdd);
	
	$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website register Form:";
	$email_body = "You have received a new message from your website register form";
	$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: ";	
	mail($to,$email_subject,$email_body,$headers);

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

exit;

}
$_SESSION['error'] ="Account Created Sucessfully .....";
header("Location: ../form/add-user.php");
}

}
?>