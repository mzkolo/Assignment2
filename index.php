
<html>
<body>
<?php
include "db.php";
include "loginform.php";

if ($_SESSION['privileges'] == customer){

echo $_SESSION['login_user'];
echo "Privileges = ";
echo $_SESSION['privileges'];
}

if ($_SESSION['privileges'] == staff){

echo $_SESSION['login_user'];
echo "Privileges = ";
echo $_SESSION['privileges'];
}


?>

<form name="jump" class="center">
<select name="menu">
  <option value = "#">Please select an option </option>
  <option value="Staff.php">Staff</option>
  <option value="Product.php">Products</option>
  <option value="Customers.php">Customers</option>
  <option value="Branch.php">Branch</option>
  <option value="Suppliers.php">Suppliers</option>
  <option value="CustomerOrder.php">Customer Orders</option>
  <option value="Stock.php">Stock</option>
  <option value="RestockOrders.php">Restock Orders</option>
  <option value="Advertisement.php">Advertisement</option>
  
</select>
<input type="button" onClick="location=document.jump.menu.options[document.jump.menu.selectedIndex].value;" value="Submit">
</form>

</body>
</html>
