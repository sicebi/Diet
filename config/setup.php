<?php  
include_once("db.php");


	try{
		
		      $conn=new PDO("mysql:host=$DBhost;dbname=$DBdatabase","$DBusername","$DBpassword");
	        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	        //$sql="CREATE DATABASE $database";
          //$conn->exec($sql);
          // $conn->exec("CREATE DATABASE $database");
            
            
		     $accounts="CREATE TABLE accounts (
              acc_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
              fname VARCHAR(50) NOT NULL,
              lname VARCHAR(50) NOT NULL,
              emailorphone VARCHAR(50) NOT NULL,
              gender VARCHAR(10) NOT NULL,
              password VARCHAR(50) NOT NULL)";
              $conn->exec($accounts);

            $admin1 ="INSERT INTO `accounts`(`fname`, `lname`, `emailorphone`, `gender`, `password`) VALUES ('Phumudzo','Mutangwa','0780307349','Female','12345')";
            $conn->exec($admin1);

            $admin2 ="INSERT INTO `accounts`(`fname`, `lname`, `emailorphone`, `gender`, `password`) VALUES ('Musa','xxx','0780307349','Female','12345')";
            $conn->exec($admin2);

            $admin3 ="INSERT INTO `accounts`(`fname`, `lname`, `emailorphone`, `gender`, `password`) VALUES ('Katli','Hlasi','0780307349','Male','12345')";
            $conn->exec($admin3);
          

            

			  
			  
             $images="CREATE TABLE food (
              food_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
              foodimg_url VARCHAR(200) NOT NULL,
              emailorphone VARCHAR(50) NOT NULL,
              target_group VARCHAR(200) NOT NULL,
			        blood_type VARCHAR(200) NOT NULL,
              food_type VARCHAR(300) NOT NULL,
              benefits VARCHAR(300) NOT NULL)";
             $conn->exec($images);	
			 			  			
             header("Location: ../index.html");
            
			
	    }catch(PDOException $e){
		    echo $e->getMessage();
        }
?>