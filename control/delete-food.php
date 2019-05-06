<?php
include_once("../config/db.php");
session_start();

try {

	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$adminDelete ="DELETE FROM `food` WHERE `food_id`=$_GET[pic]";
	$conn->exec($adminDelete);
	header("Location: ../form/delete-food.php");

} catch (PDOException $e) {

echo 'Error: '.$e->getMessage();

//exit;

}
?>