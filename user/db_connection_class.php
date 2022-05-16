<?php

class DB_Connection_Class{

	 function connection()
	 {
		   global $con;
		  $con = mysqli_connect("localhost","root","","cms_db");
		 
		  if (!$con)
		  {			
				die('Could not connect: ' . mysqli_error());	
		  }
	  
	 }
 
 
   function disconnection()
   {
		global $con;
		mysqli_close($con);
   }
}
?>
