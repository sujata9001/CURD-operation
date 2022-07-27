<?php
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>curd operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container my-5">
  		<button type="adduser" class="btn btn-primary"><a href="user1.php" class="text-light">Adduser</a></button>
  	</div>
  	<table class="table">
  		<thead>
  			<tr>
  				<th scope="col">id</th>
  				<th scope="col">Name</th>
  				<th scope="col">Email address</th>
  				<th scope="col">Phone</th>
  				<th scope="col">Password</th>
  				<th scope="col">operation</th>
  			</tr>
  		</thead>
  		<tbody>
  			<!-- fetching th data -->
  			<?php
  			$sql="select * from entercustomer";
  			$result=mysqli_query($conn,$sql);
  			if($result)
  			{
  				while($row=mysqli_fetch_assoc($result))
  				{
  					$id=$row['id'];
  					$name=$row['name'];
  					$email=$row['email'];
  					$phone=$row['mobile'];
  					$pass=$row['password'];
  					echo '<tr>
  					<th scope="row">'.$id.'</th>
  					<td>'.$name.'</td>
  					<td>'.$email.'</td>
  					<td>'.$phone.'</td>
  					<td>'.$pass.'</td>
  					<td>
  					<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light" >update</a></button>
  					<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
  					</td>

  					</tr>';

  				}
  			}
  			


  			?>
  			<!-- ........................................................................................................................ -->
  		</tbody>
  		
  		
  	</table>

  </body>
  </html>