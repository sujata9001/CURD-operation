<?php
include('connection.php');
$id=$_GET['updateid'];
$select="select * from entercustomer where id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
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
    <div class="container my-5" >
      <form action="<?php $_PHP_SELF ?>" method="post">
        <div class="form-group">
          <!-- <div class="row"> -->

            <div class="col-md-6">
              <label>ID</label>
              <input type="text" name="id"value="<?php echo $row['id'] ?>" class="form-control" placeholder="Enter the id">
            </div>
            <div class="col-md-6">
              <label>Name</label>
              <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter the name">
            </div>


            <div class="col-md-6">
              <label>Email address</label>
              <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter the email address">
            </div>
            <div class="col-md-6">
              <label>Phone</label>
              <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>" class="form-control" placeholder="Enter the phone num">
            </div>
            <div class="col-md-6">
              <label>Password</label>
              <input type="text" name="password" value="<?php echo $row['password'] ?>"class="form-control" placeholder="Enter the password">
            </div>
            <input type="submit" name="update_btn" value="update" class="btn btn-primary
            ">
            <!-- <button type="update" class="btn btn-primary my-5" name="update">update</button> -->
          </div>
        </div>
      </form>
    </div>
    <?php
    if(isset($_POST['update_btn'])){
      $id=$_POST['id'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['mobile'];
      $pass=$_POST['password'];
      $update="update entercustomer set id='$id',name='$name',email='$email',mobile='$phone',password='$pass' where id='$id'";
      $data=mysqli_query($conn,$update);
      if($data)
      {
        echo "data updated sucessfully";
      }
      else
      {
        echo "error";
      }


    }
    ?>

  </body>
  </html>