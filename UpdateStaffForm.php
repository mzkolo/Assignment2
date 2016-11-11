<html>
<head>
<meta http-equiv="refresh" content="0; url=Staff.php" />
</head>
<body>
<?php 
include "db.php"; 
// get content from form
if (!empty($_POST['id'])){
	$id = $_POST["id"];
}
if (!empty($_POST['firstname'])){
	$firstname = $_POST["firstname"]; 
}

if (!empty($_POST['surname'])){
	$surname = $_POST["surname"];
}
if (!empty($_POST['position'])){
	$position = $_POST["position"];
}
if (!empty($_POST['salary'])){
	$salary = $_POST["salary"];
}
if (!empty($_POST['address'])){
	$address = $_POST["address"];
}
if (!empty($_POST['city'])){
	$city = $_POST["city"];
}
if (!empty($_POST['postcode'])){
	$postcode = $_POST["postcode"];
}
if (!empty($_POST['email'])){
	$email = $_POST["email"];
}
if (!empty($_POST['phonenumber'])){
	$phonenumber = $_POST["phonenumber"];
}
if (!empty($_POST['branch'])){
	$branch = $_POST["branch"];
}
if (!empty($_POST['password'])){
$password = $_POST["password"];
}
if (!empty($_POST['privileges'])){
$privileges = $_POST["privileges"];
}

// SQL Insert using variable names 
$sql = "SELECT staffID FROM staff WHERE staffID='$id'";
$result = mysql_query($sql);

if(mysql_num_rows($result) <1){
	echo "There is no staff member with such ID";
}
else{
if($salary==null)
{
	$salary = 0;
}

mysql_query("Update staff SET sFname = '$firstname', sSurname = '$surname', position = '$position', salary = '$salary', sAddress = '$address', sCity = '$city', sPostcode = '$postcode', 
			sEmail = '$email', sPhoneNumber = '$phonenumber', branchID = '$branch', password = '$password', privileges = '$privileges'
			WHERE staffID = '$id'", $db); 
echo "Staff member was successfully updated <br>"; 	
}

?> 
</body>
</html>