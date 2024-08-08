<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
include 'cdb1.php';
$username=$_POST["username"];
$password=$_POST["password"];


    $sql="Select * from _feedb where username='$username' AND password ='$password'";
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
         session_start();
         $_SESSION['loggedin']=true;
         $_SESSION['username']=$username;
        //  header("location: feedback_data.php");
         header("location: choose.php");
    }

else{
    $showError="Invalid Credentials";
}
}

?>
<!doctype html>
<html lang="en" dir="ltl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="login010.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Login1</title>
    <style>
      body{
        background-color: #2c3e50;
        background-color: rgb(107, 107, 193);
      }
    </style>
  </head>
  <body>
    <?php  require  '_navbar.php' ?>
    <?php
  if($login){
   echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Success!</strong>You are logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
  }
  if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong> Error!</strong> '. $showError .'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div> ';
   }
?>
<h1 class="text-center" id="header" style="color:black">Login to our website</h1>
<div class=" mb-15" id="lo">
    
    <form action="/happy/feedback/login1.php" method="post">
  <div class="mb-10 col-md-25" >
    <label for="username" class="form-label" style="color:white">Username</label>
    <input type="text" maxlength="25" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
  </div>
  <br>
  <div class="mb-3  col-md-25">
    <label for="password" class="form-label" style="color:white">Password</label>
    <input type="password" maxlength="25"class="form-control" id="password" name="password" required>
  </div>


  <button type="submit" class="btn btn-dark col-md-25">Login</button>
  <br> <br> 
  <div>
  <a href="/happy/feedback/signup1.php" id="sig" >Register </a>
  </div>
      
</form>
        
       <!-- <a href="/happy/feedback/signup1.php">Register</a>  -->
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>