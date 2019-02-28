<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $particular =$_REQUEST['particular'];
    $item_quantity = $_REQUEST['item_quantity'];
	$unit = $_REQUEST['unit'];
	$regular_price = $_REQUEST['regular_price'];
	$discount = $_REQUEST['discount'];
    $ins_query="insert into product_table(particular,item_quantity,unit,regular_price,discount) values
    ('$particular','$item_quantity','$unit','$regular_price','$discount')";
    mysqli_query($con,$ins_query);
    $status = "New Product added Successfully.
    </br></br><a href='viewprod.php'>View Product</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<center><title>Add New Product</title></center>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="profile.php"><i class="fa fa-sign-out"></i>Profile</a>
  <a href="viewprod.php"><i class="fa fa-address-card-o"></i>View Product</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<br/><br/><br/><br/><div class="form">
<div>
<center><h2><font face="Britannic Bold">Add New Product</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="particular" placeholder="Enter particular" required /></p>
<p><input type="text" name="item_quantity" placeholder="Enter item_quantity" required /></p>
<p><input type="text" name="unit" placeholder="Enter unit" required /></p>
<p><input type="text" name="regular_price" placeholder="Enter regular_price" required /></p>
<p><input type="text" name="discount" placeholder="Enter discount" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</center>
</div>
</div>
</div>
</body>
</html>