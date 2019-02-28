<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_table where code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['code_no'];
		$custom_id =$_POST['customer_id'];
		$due_date =$_POST['due_date'];
		$status =$_POST['status'];
		$date_paid =$_POST['date_paid'];
		$interest =$_POST['ineterest'];
		$update="
		UPDATE collection_table 
		SET 
			code_no='".$id."', 
			custom_id='".$customer_id."', 
			due_date='".$due_date."', 
			status='".$status."',
			date_paid='".$date_paid."', 
			ineterest='".$itnrest."'";
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewcoll.php' : window.location.href='viewcoll.php';
				</script>
			";
			
			
		}
		
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Update Record</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
	<div class="sidebar">
		<a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="Viewcus.php"><i class="fa fa-address-card-o"></i>Customer</a>
		<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Products</a>
		<a href="viewcoll.php"><i class="fa fa-address-card-o"></i>Collection</a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
			<p><input type="text" name="code_no" placeholder="Enter code_no"
			required value="<?php echo $row['code_no'];?>" /></p>
			<p><input type="text" name="product_id" placeholder="Enter product_id"
			required value="<?php echo $row['product_id'];?>" /></p>
			<p><input type="text" name="particular" placeholder="Enter particular"
			required value="<?php echo $row['particular'];?>" /></p>
			<p><input type="text" name="item_quantity" placeholder="Enter item_quantity" 
			required value="<?php echo $row['item_quantity'];?>" /></p>
			<p><input type="text" name="unit" placeholder="Enter unit" 
			required value="<?php echo $row['unit'];?>" /></p>
			<p><input type="text" name="regular_price" placeholder="Enter regular_price" 
			required value="<?php echo $row['regular_price'];?>" /></p>
			<p><input type="text" name="discount" placeholder="Enter discount" 
			required value="<?php echo $row['discount'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>