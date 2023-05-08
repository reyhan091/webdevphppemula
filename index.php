<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
</head>

<body>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

  $sql="insert into crud values ('', '$name','$email','$phone','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data Insert Succesfully";
  }else{
    die(mysqli_error($con));
  }
}

?>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your name" 
                name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter your name" 
                name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" 
                placeholder="Enter your phone number" 
                name="phone" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" 
                placeholder="Enter your password" 
                name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn 
            btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>