<?php
include("../control/login-user.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
  background-image:url("img/helmet.png");
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
			background-image:url("../img/health_on_the_net.jpg");
			    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
		}	   
   #paragr{
	   background-color:white;
   } 
#img_shap{
	border-radius:10px;
}
#scrol{
	overflow:scroll;
	height:500px;
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

<div class="container" >
   <form action="login-user" method="post" enctype="multipart/form-data">
        <br/>
		 <br/>
		<center><h1>Login</h1></center>
        <br/>  
     <div class="form-group">
     <div class="row">
	   <input type="type" name="emailorphone" placeholder="email or phone..." class="form-control" id="inputfile" required>
	  </div>
	 </div> 
	 <div class="form-group">
     <div class="row">
	   <input type="password" name="password" placeholder="Password..." class="form-control" id="inputfile" required>
	  </div>
	 </div> 
	 
	 
	 
	 
	 <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
	   <button type="submit" name="newProfileBtn" class="btn btn-default">Login</button>
	  </div>
	 </div>
   </form>
   <span><?php echo $_SESSION['error']; ?></span>
  </div> 
		
   
  </body>

</html>
