<html>
	<head>
	<title>All Products</title>
	<link rel="stylesheet" type="text/css" href="CUStyle.css">
	
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
	
<body>
	<?php
include "db.php";

$order = isset($_GET['sort'])?$_GET['sort']:'productID';

error_reporting(0);
$id = $_POST["search"];
if($id==null)
{
	$sql = "SELECT productID, productName, productType, unitPrice, totalProductQuantity FROM product ORDER BY $order";
}
else
{
	$sql = "SELECT productID, productName, productType, unitPrice, totalProductQuantity FROM product WHERE productID='$id' or productName='$id' or productType='$id' or unitPrice='$id' or totalProductQuantity='$id' ORDER BY $order";

}
$result = mysql_query($sql, $db);
echo "<table width = '100%' class='demo'>
	
		<th><a>Product Name</a></th>
		<th><a>Unit Price</a></th>
	</tr>";
    while($row = mysql_fetch_array($result)) {
		echo "</td> <td>" . $row["productName"] .  "</td> <td>" . $row["unitPrice"];
		echo "</td></tr>";
    }
	echo " </table>"

?> 
	
	
	</body>
</body>
</html>