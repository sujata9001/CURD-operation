<?php
//creat connection
$conn=mysqli_connect('localhost','root','pass1234','detailstu');
//check connection
if($conn)
{
	echo "connection sucessfully";
}
else
{
	echo "connection failed";
}

?>