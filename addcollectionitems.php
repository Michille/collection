<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $Product_ID =$_REQUEST['prid'];
	$Code_no =$_REQUEST['cod_num'];
    $Quantity = $_REQUEST['Quan'];
	$Unit = $_REQUEST['unt'];
	$Amount = $_REQUEST['amnt'];
    $ins_query="insert into collection_items(Code_no,Product_ID,Quantity,Unit,Amount) values
    ('$Code_no','$Product_ID','$Quantity','$Unit','$Amount')";
    mysqli_query($con,$ins_query);
    $status = "New ITEMS added Successfully.
    </br></br><a href='viewitems.php'>View Items</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New ITEMS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		   	<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
			<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="viewcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
<div class="main">
<br/><br/><br/><br/><div class="form">
<div>
<h2><font face="Britannic Bold">Add New Items</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="prid" placeholder="Enter Product_ID" required /></p>
<p><input type="text" name="cod_num" placeholder="Enter Code_no" required /></p>
<p><input type="number" name="Quan" placeholder="Enter Quantity" required /></p>
<p><input type="text" name="unt" placeholder="Enter Unit" required /></p>
<p><input type="text" name="amnt" placeholder="Enter Amount" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</div>
</body>
</html>
