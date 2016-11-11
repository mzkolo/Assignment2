<html> 
	<head> 
		<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
window.onload = function(){
		$("#add")	.hide();
		$("#delete").hide();
		$("#update").hide();
	}
$(document).ready(function(){
    $("#showAdd").click(function(){
        $("#add").show();
		$("#delete").hide();
		$("#update").hide();
    });
    $("#showDelete").click(function(){
        $("#add").hide();
		$("#delete").show();
		$("#update").hide();
    });
	$("#showUpdate").click(function(){
        $("#add").hide();
		$("#delete").hide();	
		$("#update").show();
    });

});
</script>
	</head> 
	<header>
	<h3><a href="index.php">Back</a><h3>
	</header>

	<body> 

	
	 <?php
include "db.php"; 
include "loginform.php";

echo "ID = ";
echo $_SESSION['login_user'];
echo "<br>";
echo $_SESSION['firstname'] . " ";
echo $_SESSION['surname'];
echo "<br>";
echo "Privileges = ";
echo $_SESSION['privileges'];

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}

$staffView = "SELECT * FROM staff WHERE staffID ='{$_SESSION['login_user']}'";
$managerView = "SELECT * FROM staff";

$sql = "SELECT * FROM staff";

if ($_SESSION['privileges'] == "staff"){
	$result = mysql_query($staffView, $db);
}

if ($_SESSION['privileges'] == "manager"){
	$result = mysql_query($managerView, $db);
}
// else{
//$result = mysql_query($sql, $db);
// }

//$result = mysql_query($sql, $db);
echo "<table width = '100%' class='demo'>
	<caption><h2>Staff</h2></caption>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Position</th>
		<th>Salary</th>
		<th>Address</th>
		<th>City</th>
		<th>Postcode</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Branch</th>
		<th>Password</th>
		<th>Privileges</th>
	</tr>";
    while($row = mysql_fetch_array($result)) {
		echo "<tr> <td>" . $row["staffID"] . "</td> <td>" . $row["sFname"] . "</td> <td>" . $row["sSurname"] . "</td> <td>" . 
		$row["position"] . "</td> <td>" . $row["salary"] . "</td> <td>" . $row["sAddress"] . "</td> <td>" . $row["sCity"] . "</td> <td>" .
		$row["sPostcode"] . "</td> <td>" . $row["sEmail"] . "</td> <td>" . $row["sPhoneNumber"] . "</td> <td>" . $row["branchID"] . "</td> <td>" . $row["password"] . "</td> <td>" . $row["privileges"];
		echo " </td></tr>";
      //  echo "<a href = 'index.php/". $row["staffID"] ."'>" . "id: " . $row["staffID"]. " - Name: " . $row["sFname"]. " " . $row["sSurname"]. "<br>" . "</a>";
    }
	echo " </table>"

?> 
<br>
<br>
<table width="100%">
<tr>
<td width = "33.3%" align="center"><button id="showAdd">Add Staff</button></td>
<td width = "33.3%" align="center"><button id="showDelete">Delete Staff</button></td>
<td width = "33.3%" align="center"><button id="showUpdate">Update Staff</button></td>
</tr>
<tr >
	<td width = "33.3%" align="center">
	<form name="Add staff member" action="AddStaffForm.php" method="post" id = "add" class="center"> 
	<div class="field">
	<label>Firstname</label>
	<input type="text" name="firstname"><br>
	<label>Surname</label>
	<input type="text" name="surname"><br>
	<label>Position</label>
	<input type="text" name="position"><br>
	<label>Salary</label>
	<input type="text" name="salary"><br>
	<label>Address</label>
	<input type="text" name="address"><br>
	<label>City</label>
	<input type="text" name="city"><br>
	<label>Postcode</label>
	<input type="text" name="postcode"><br>
	<label>Email</label>
	<input type="text" name="email"><br>
	<label>Phone Number</label>
	<input type="text" name="phonenumber"><br>
	<label>Branch</label>
	<input type="text" name="branch"><br>
	<label>Password</label>
	<input type="text" name="password"><br>
	<label>Privileges</label>
	<input type="text" name="privileges"><br>
	<input type="submit" value="Submit">
	
	</div>
	</form> 
	</td>
	<td width = "33.3%" align="center">
	<form name="Delete staff member" action="DeleteStaffForm.php" method="post" id = "delete" class="center"> 
	<div class="field">
	<label>ID (Unique)</label>
	<input type="text" name="id"><br>
	<label>Last name</label>
	<input type="text" name="lastname"><br>
	<input type="submit" value="Submit">
	</div>
	</form> 
	
	<td width = "33.3%" align="center">
	<form name="Add staff member" action="UpdateStaffForm.php" method="post" id = "update" class="center"> 
	<div class="field">
	<label>ID (Unique)</label>
	<input type="text" name="id"><br>
	<label>Firstname</label>
	<input type="text" name="firstname"><br>
	<label>Surname</label>
	<input type="text" name="surname"><br>
	<label>Position</label>
	<input type="text" name="position"><br>
	<label>Salary</label>
	<input type="text" name="salary"><br>
	<label>Address</label>
	<input type="text" name="address"><br>
	<label>City</label>
	<input type="text" name="city"><br>
	<label>Postcode</label>
	<input type="text" name="postcode"><br>
	<label>Email</label>
	<input type="text" name="email"><br>
	<label>Phone Number</label>
	<input type="text" name="phonenumber"><br>
	<label>Branch</label>
	<input type="text" name="branch"><br>
	<label>Password</label>
	<input type="text" name="password"><br>
	<label>Privileges</label>
	<input type="text" name="privileges"><br>
	<input type="submit" value="Submit">
	</div>
	</form> 
	</td>
</tr>
</table>	
	</body>
</html>

	