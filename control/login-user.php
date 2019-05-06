<?php
include_once("../config/db.php");
session_start();


if (isset($_POST['newProfileBtn'])) {

$emailorphone= $_POST['emailorphone'];

$password= $_POST['password'];


//check password strength

if (strlen($password) < 4)

{

$_SESSION['error'] ="Invalid Password";

header("Location: ../form/login.php");

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

exit;

}

//variable for usercolum (id) to check assume exist else not exist

if ($Existemailorphone)//check pass word
{
try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$req = $conn->prepare('SELECT * FROM accounts WHERE emailorphone = ? AND password = ?' );

	$req->execute([$emailorphone, $password]);

	$ExistusrANDpasw = $req->fetchColumn();

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

exit;

}


if ($ExistusrANDpasw) //if state active session start else activate
{

$_SESSION['emailorphone'] = $emailorphone;
$_SESSION['error'] ="You have logged in succesful";
header("Location: ../form/admin.php");

exit();

}else{

$_SESSION['error'] ="Oops something went wrong try again";

header("Location: ../form/login-user.php");

exit();

}
header("Location: ../form/login-user.php");
exit();
}

}

?>