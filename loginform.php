<?php
include "db.php"; 
session_start();

// get content from form

$ID = $_POST["ID"];
$password = $_POST["password"];

// SQL Insert using variable names

$ID = stripslashes($ID);
$password = stripslashes($password);

      $password = mysql_real_escape_string($password); 
      
      $sqlQry = "SELECT staffID, sFname, sSurname, privileges, password FROM staff WHERE staffID = '$ID' and password = '$password'";
	  $result = mysql_query($sqlQry, $db);
	  
	  if ($result == false){
		  echo "query failed";
	  }
	  else {
		  
	  
      $row = mysql_fetch_array($result);
	  
	  
	  //$row = mysql_fetch_array($result);
      $rows = mysql_num_rows($result);
	  
	  // If result matched $ID and $password, table row must be 1 row
	  if ($rows == 1){
		  echo "GGGGGGGGGGGGGG";
		  echo "id: " . $row["staffID"]. " - Name: " . $row["privileges"]. " " . $row["password"];
		  $_SESSION['privileges']=$row["privileges"];
		  $_SESSION['firstname']=$row["sFname"];
		  $_SESSION['surname']=$row["sSurname"];
		  echo "<br>";
		  $_SESSION['login_user']=$ID;
		  header("location: index.php"); // Redirecting To Other Page
	  }

	  }
	  

      
      // If result matched $ID and $password, table row must be 1 row
		
      //if($count == 1) {
         //session_register("ID");
		// $_SESSION['ID'] = $ID;
         //$_SESSION['privileges'] = $row['privileges'];
         
        // header("location: welcome.php");
     // }else {
       //  $error = "Your Login Name or Password is invalid";
     // }
   
?>