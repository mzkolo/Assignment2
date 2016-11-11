<html> 
	<head> 
		<link rel="stylesheet" type="text/css" href="CUStyle.css">
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
	<body background="background.jpg"> 
	<header>
		<h1>Grassroots</h1>
		<h2>Your home of soccer equipment<h2>
	</header>
	<nav>
	<ul>
			<li><a href="homepage.php">Home </a></li>
			<li><a href="custProducts.php">Products</a></li>
			<li><a href="CustLogin.php">Login</a></li>
			<li><a href="login.php">Staff Intranet</a></li>
			<li><a href="Branch.php">Contact Us</a></li>	
	</ul> 
</nav>
	<form action="Branch.php" method="post">
	<input type="search" name="search" placeholder="Search.."> 
	</form>	
	
	 <?php
include "db.php"; 
//include "loginform.php";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}

//$staffView = "CREATE VIEW staffView AS SELECT staffID,sFname, sSurname, position, salary , sAddress, sCity, sPostcode, sEmail, sPhoneNumber, branchID FROM staff WHERE ID = '$_SESSION['ID']'";
//$managerView = "CREATE VIEW managerView AS SELECT staffID,sFname, sSurname, position, salary , sAddress, sCity, sPostcode, sEmail, sPhoneNumber, branchID FROM staff";
$order = isset($_GET['sort'])?$_GET['sort']:'branchID';

error_reporting(0);
$id = $_POST["search"];
if($id==null)
{
	$sql = "SELECT branchID, bAddress, bCity, bPostcode FROM branch ORDER BY $order";
}
else
{
	$sql = "SELECT branchID, bAddress, bCity, bPostcode FROM branch WHERE branchID='$id' or bAddress='$id' or bCity='$id' or bPostcode='$id' ORDER BY $order";
}
$result = mysql_query($sql, $db);
echo "<table width = '100%' class='demo'>
	<caption><h2>Branch</h2></caption>
	<tr>
		<th><a href='Branch.php?sort=branchID'>ID</a></th>
		<th><a href='Branch.php?sort=bAddress'>Address</a></th>
		<th><a href='Branch.php?sort=bCity'>City</a></th>
		<th><a href='Branch.php?sort=bPostcode'>Postcode</a></th>
	</tr>";
    while($row = mysql_fetch_array($result)) {
		echo "<tr> <td>" . $row["branchID"] . "</td> <td>" . $row["bAddress"] . "</td> <td>" . $row["bCity"] . "</td> <td>" . $row["bPostcode"];
		echo " </td></tr>";
      //  echo "<a href = 'index.php/". $row["staffID"] ."'>" . "id: " . $row["staffID"]. " - Name: " . $row["sFname"]. " " . $row["sSurname"]. "<br>" . "</a>";
    }
	echo " </table>"

?> 
<br>
<br>
<table width="100%">
<tr>
<td width = "33.3%" align="center"><button id="showAdd">Add Branch</button></td>
<td width = "33.3%" align="center"><button id="showDelete">Delete Branch</button></td>
<td width = "33.3%" align="center"><button id="showUpdate">Update Branch</button></td>
</tr>
<tr >
	<td width = "33.3%" align="center">
	<form name="Add branch" action="AddBranchForm.php" method="post" id = "add" class="center"> 
	<div class="field">
	<label>Address</label>
	<input type="text" name="address"><br>
	<label>City</label>
	<input type="text" name="city"><br>
	<label>Postcode</label>
	<input type="text" name="postcode"><br>
	<input type="submit" value="Submit">
	</div>
	</form> 
	</td>
	<td width = "33.3%" align="center">
	<form name="Delete branch" action="DeleteBranchForm.php" method="post" id = "delete" class="center"> 
	<div class="field">
	<label>ID (Unique)</label>
	<input type="text" name="id"><br>
	<input type="submit" value="Submit">
	</div>
	</form> 
	
	<td width = "33.3%" align="center">
	<form name="Add branch" action="UpdateBranchForm.php" method="post" id = "update" class="center"> 
	<div class="field">
	<label>ID (Unique)</label>
	<input type="text" name="id"><br>
	<label>Address</label>
	<input type="text" name="address"><br>
	<label>City</label>
	<input type="text" name="city"><br>
	<label>Postcode</label>
	<input type="text" name="postcode"><br>
	<input type="submit" value="Submit">
	</div>
	</form> 
	</td>
</tr>
</table>	
	</body>
</html>