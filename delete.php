<?php
include('connection.php');
if(isset($_GET['deleteid']))
{
	$id=$_GET['deleteid'];
	$sql="delete from entercustomer where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		// echo "delete sucessfully";
		header("location: addall.php");
	}
	else
	{
		echo "not deleted";
	}
}
?>