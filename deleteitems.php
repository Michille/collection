<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM collection_items WHERE product_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewitems.php"); 
?>