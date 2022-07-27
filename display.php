<?php
include('connection.php');

// if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
$pass=$_POST['password'];
$q="insert into entercustomer (id,name,email,mobile,password) values('$id','$name','$email','$phone','$pass')";
$result=mysqli_query($conn,$q);
if($result)
{
	echo "inserted sucessfully";
	header("location: addall.php");
}
else
{
	echo "error";
}



?>