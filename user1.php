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
      <form action="display.php" method="post">
        <div class="form-group">
          <!-- <div class="row"> -->

            <div class="col-md-6">
              <label>ID</label>
              <input type="text" name="id" class="form-control" placeholder="Enter the id">
            </div>
            <div class="col-md-6">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter the name">
            </div>


            <div class="col-md-6">
              <label>Email address</label>
              <input type="text" name="email" class="form-control" placeholder="Enter the email address">
            </div>
            <div class="col-md-6">
              <label>Phone</label>
              <input type="text" name="mobile" class="form-control" placeholder="Enter the phone num">
            </div>
            <div class="col-md-6">
              <label>Password</label>
              <input type="text" name="password" class="form-control" placeholder="Enter the password">
            </div>
            <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
  </html>