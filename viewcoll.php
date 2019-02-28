<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Customer</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="addcoll.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
			<a href="viewprod.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="addcus.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<center><div class="main w-75">
		<br/><br/>
		<div class="form">
				<h2><font face="Britannic Bold">Collection List</font></h2>
		</div>

		<table class=" table table-striped table-responsive table-border-collapse" width="100%"  style="border-collapse:collapse; background-color: rgba(0,0,0,0.1)">
			<thead>
				<tr class=" text-success"> 
				<th><strong>Number</strong></th>
				<th><strong>customer_id</strong></th>
				<th><strong>code_no</strong></th>
				<th><strong>due_date</strong></th>
				<th><strong>status</strong></th>
				<th><strong>date_paid</strong></th>
				<th><strong>interest</strong></th>
				<th><strong>edit</strong></th>
				<th><strong>delete</strong></th>
				</tr>
			</thead>
		</div>
			</center>
				<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM collection_table";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
		<tr><td align="center"><?php echo $count; ?></td>
			<td align="center"><?php echo $row["customer_id"]; ?></td>
			<td align="center"><?php echo $row["code_no"]; ?></td>
			<td align="center"><?php echo $row["due_date"]; ?></td>
			<td align="center"><?php echo $row["status"]; ?></td>
			<td align="center"><?php echo $row["date_paid"]; ?></td>
			<td align="center"><?php echo $row["interest"]; ?></td>
			<td align="center">
				<a href="editcoll.php?id=<?php echo $row["customer_id"]; ?>"><i class="fa fa-edit"></i></a>
					</td>
				<td align="center">
				<a href="deletecoll.php?id=<?php echo $row["customer_id"]; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
							</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
