<?php
include("../control/update-user.php");
?> 

<!DOCTYPE html>
<html lang="en">

  <head>

    
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  </head>

  <body>
 
 <br><br>
 <div class="container" >
   <form action="#" method="post" enctype="multipart/form-data">
        
		<center><h1><u>Update Current User</u></h1></center>
        <br/> 
        <div class="form-group">
     <div class="row">
     Email/Phone -:<?php echo $_SESSION['emailorphone'];?>
	  </div>
     </div>
      
	<div class="form-group">
     <div class="row">
	   <input type="password" class="form-control" name="password" placeholder="Password..." required>
	  </div>
	 </div>
	 <div class="form-group">
     <div class="row">
	   <input type="password" class="form-control" name="conf_password" placeholder="Retype Password..." required>
	  </div>
	 </div>
	
	 
	 <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
	   <button type="submit" name="newProfileBtn" class="btn btn-default">Update</button>
	  </div>
	 </div>
	 <span><?php echo $_SESSION['error']; ?></span>
	 <br>
	 <br>
	 <center><a href="admin.php">Back</a></center>
   </form>
  </div> 