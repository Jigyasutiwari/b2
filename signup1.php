<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
include 'cdb1.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
// $exists=false;
$existSql="SELECT * FROM `_feedb` WHERE username= '$username'";
$result=mysqli_query($conn, $existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows >0){
  // $exists=true;
  $showError=" Username Already Exists";
}else{
  // $exists=false;
  if(($password == $cpassword)){
    $sql="INSERT INTO `_feedb` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
    //INSERT INTO `_feedb` (`sno`, `username`, `password`, `dt`) VALUES ('1', 'Happy', '123', current_timestamp());
    $result=mysqli_query($conn, $sql);
    if($result){
        $showAlert=true;
    }
}
else{
    $showError=" Passwords do not match";
    }
   }
}

?>
<!doctype html>
<html lang="ar" dir="ltl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="signup001.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Signup</title>
</head>

<body id="color">

   
    <?php  require  '_navbar.php' ?>
    <?php


  if($showAlert){
   echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
  }
  if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> '. $showError .'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div> ';
   }
?>



    <h1 class="text-center"  id="heading">Signup to our website</h1>
    <div class="conatiner" id="sg">
        <!-- <h1 class="text-center">Signup to our website</h1> -->
        <form action="/happy/feedback/signup1.php" method="post">
            <div class="mb-3 col-md-16 ">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="25" class="form-control" id="username" name="username"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3  col-md-16">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="25" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 col-md-16">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" maxlength="25" class="form-control" id="cpassword" name="cpassword" required>
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>

            </div>

            <button type="submit" class="btn btn-primary col-md-16">Signup</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
   
</body>

</html>