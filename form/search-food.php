<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TheWebsiteGuy</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

	<style>
	
	
      .link-icons{
	     background-color:black;
		 color:white;
	  }
	  .nav-backround{
	 opacity:0.9;
	 
	}
	#container2{
	 background-image:url("../img/constr/construction-image1.jpg");
	 background-size:100% 100%;
	 background-repeat:no-repeat;
	 
	}
	#the,#web,#guy,.fontType{
	 color:black;
	font-family:,arial,Rosewood Std Regular;	
	 
	}
	header,#yellow-line{
	  border-bottom:5px solid Yellow;
	  height:auto;
	}
	#black-line{
	  border-bottom:3px dashed Black;
	  height:auto;
	}
	.bg-services{
	 BORDER-radius:5px;
	 border-bottom:2px solid yellow;
	 
	 border-left:2px solid yellow;
	}
.lead{font-size:1em;font-family:arial;padding:5px;}
.aboutUs{
  background-image:url("../img/helmet.png");
    background-repeat:no-repeat;	
	 background-size:15% auto;
	 background-position:center;
	font-weight:Franklin Gothic Heavy;
	 
}
.bg-primary1{
background-image:url("../img/two wheels.png");
     background-size:15% 100%;
    background-repeat:no-repeat;	
	 
}
#lead1{
color:black;
}
.bg-contact{
background-color:black;
color:yellow;
 border-left:2px solid yellow;
border-bottom:5px solid Yellow;	
}
.main-view{
width:100%; 
 margin-top:10px;
}


#choices{
background-color:#3ADF00;
padding:5%;
border-radius:5px;
}
#choices p{
color:white;
font-weight:bold;
}
#choices h2 a{
color:white;

}

    body{
			background-image:url("../img/171873.jpg");
		}	   
   #paragr{
	   background-color:white;
   } 
   form{
	   background-color:forestgreen;
	   color:white;
   }
#img_shap{
	border-radius:10px;
}
#scrol{
	overflow:scroll;
	height:500px;
}
#red-color{
	color:red;
}
	</style>
	
  </head>

  <body >

    <!-- Navigation -->
	
	<nav  class="navbar navbar-expand-lg nav-backround   "  id="mainNav" >
	

	<div  class="container"  >
       
		
		<div class="" id="">
        <center><a class="navbar-brand js-scroll-trigger" href="../index.html"><span id="the">Food</span><span id="web">Junky</span></span></a></center>

           
        </div>

      </div>
    </nav>
  
      
        
		<?php
include_once("../config/db.php");
session_start();


//look for what has been selected from the index page to be searcched
$target_group = $_POST['target_group'];
$blood_type= $_POST['blood_type'];

try {


	$conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$req = $conn->prepare("SELECT `foodimg_url`, `target_group`, `blood_type`, `food_type`, `benefits` FROM `food` WHERE `target_group`='$target_group' AND `blood_type`='$blood_type' ");
	
	$req->execute();
	
	$food = $req->fetchAll();
	
	} catch (PDOException $e) {
	
	echo 'Error: '.$e->getMessage();
	
	exit;
	
	}
	if (!$food) {

		echo "<marquee><h1> The Database is empty !!!!!! <br /> log and Insert some data</h1></marquee>";
		exit();
		}
		

	if ($food) {
	
	echo "<div><b><u><center> USERS OF THE SYSTEM</u></center></b></div><br>";
	echo "<div> <b>";

	
	foreach ($food as $key => $food) {
	
	//echo "<hr/><b>ID: $users[acc_id] $users[fname] $users[lname] $users[gender] </b>";
	echo "
	<table style='background:green;'>
		<tr>
			 <td>
			 	<img src='$food[foodimg_url]' style='width:200px; style='height:200px;'>
			  <br>$food[target_group]	
			  <br>$food[blood_type]		
			  <br>$food[food_type]		
				<br>$food[benefits]	
			</td> 
		</tr>
	</table>
	<br>
	<br>";

	
	}
	
	echo '</div>';
	
	}

?>


  </body>

</html>
