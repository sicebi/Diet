<?php
include("../control/add-food.php");
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
   <form action="../control/add-food.php" method="POST" enctype="multipart/form-data">
        
		<center><h1><u>UPLOAD NEW DIET</u></h1></center>
        <br/>  
     <div class="form-group">
     <div class="row">
		 
	   <!-- <input type="file" name="foodimg_url" class="form-control" id="inputfile"> -->
		 <label for="file"> Pick a file : </label>

		<input type="file" name ="file"> 

		<!-- <input type="submit" value = "Upload"> -->
	  </div>
	 </div> 
	 
	 <div class="form-group">
     <div class="row">
	   <label class="col-sm-1" >Blood Type</label>
	   <select name="blood_type" class="form-control">
	    <option value="A">A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
	   </select>
	 </div>
	 </div>
	 
	 <div class="form-group">
     <div class="row">
	   <label class="col-sm-1" >Target Group</label>
	   <select name="target_group" class="form-control">
	    <option value="gym">GYM</option>
		<option value="hospital">HOSPITALS</option>
		<option value="rehab">REHABILITATION CENTERS</option>
	   </select>
	 </div>
	 </div>
  
     <div class="form-group">
     <div class="row">
	   <input type="text" class="form-control" name="food_type" placeholder="Food Type..." require>
	  </div>
	 </div>   
	
	
	 <div class="form-group">
     <div class="row">
	  <textarea class="form-control" name="benefits" placeholder="Benefits..." require></textarea>
	 </div>
	 </div>

	 
	 <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
	   <button type="submit" name="submit" class="btn btn-default" require>Register</button>
	  </div>
	 </div>
	 <span><?php echo $_SESSION['error']; ?></span>
	 <br/>
<br/>  
 

   </form>
  </div><br/>

   
  </body>
	<center><a href="admin.php">Back</a> </center>
</html>



