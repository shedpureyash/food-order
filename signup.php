<?php
$showalert=false;
  require("database/dbconnect.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $username=$_POST["username"];
    $Email=$_POST["Email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cnpassword"];
    if($password==$cpassword )
        {
            $sql="INSERT INTO `user` ( `username`, `email`, `password`) 
            VALUES ( '$username', '$Email', '$password')";
            $result=mysqli_query($conn,$sql);
            $showalert=true;
            header("location: login.php");
        }
     else
     {
      echo '<div class="alert alert-danger" role="alert">
      password and confirm password should be same
    </div>';
     }   
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
      <?php
      if($showalert==true)
      {
        echo  '<div class="alert alert-success" role="alert">
               Account created succesfully
               </div>';
      }
     
      ?> 
      
      
  <form action="signup.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="Email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cnpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cnpassword" name="cnpassword">
  </div>
  <button type="submit" class="btn btn-primary">sign up</button>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>