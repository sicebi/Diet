<?php
include_once("../config/db.php");
session_start();


if (isset($_POST['newProfileBtn'])) {

$password= $_POST['password'];
$confirm_password= $_POST['conf_password'];
$emailorphone= $_SESSION['emailorphone'];


//check password strength

if (strlen($password) < 4)

{

$_SESSION['error'] ="Invalid Password or not Strong";

header("Location: ../form/update-user.php");

exit(); 

}
if ($password != $confirm_password)

{

$_SESSION['error'] ="Password Do not Match";

header("Location: ../form/update-user.php");

exit(); 

}

//connect and check user by colum return(id NO)
try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $adminUpdate ="UPDATE `accounts` SET `password`=$password WHERE `emailorphone`=$emailorphone";
    $conn->exec($adminUpdate);

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

exit;

}

//variable for usercolum (id) to check assume exist else not exist

$_SESSION['error'] ="Account Updated Sucessfully .....";
header("Location: ../form/admin.php");
}

?>