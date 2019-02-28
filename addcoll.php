<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$code_no =$_REQUEST['code_no'];
    $customer_id =$_REQUEST['customer_id'];
    $due_date = $_REQUEST['due_date'];
	$status = $_REQUEST['status'];
	$date_paid = $_REQUEST['date_paid'];
    $interest = $_REQUEST['interest'];
    $ins_query="insert into collection_table(code_no,customer_id,due_date,status,date_paid,interest) values
    ('$code_no','$customer_id','$due_date','$status','$date_paid','$interest')";
    mysqli_query($con,$ins_query);
    $status = "New collection added Successfully.
    </br></br><a href='viewcoll.php'>View Products</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Collection</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
	<div class="sidebar">
	   <a class="mt-5" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="addcoll.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
		<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcus.php"><i class="fa fa-address-card-o"></i>Customers </a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
		<h2><font face="Britannic Bold">Add New Collection</font></h2>
			<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<p><input type="text" name="code_no" placeholder="Enter code_no" required /></p>
			<p><input type="text" name="customer_id" placeholder="Enter customer_id" required /></p>
			<p><input type="date" name="due_date" placeholder="Enter due_date" required /></p>
			<p><input type="text" name="status" placeholder="Enter status" required /></p>
			<p><input type="date" name="date_paid" placeholder="Enter date_paid" required /></p>
			<p><input type="text" name="interest" placeholder="Enter interest" required /></p>
			<p><input name="submit" type="submit" value="Submit" /></p>
			</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
</body>
</html>
