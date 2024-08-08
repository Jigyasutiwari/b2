
<?php 
include '_navbar.php' 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feed00.css">
    <style>
    body {
        /* background-color: rgb(7, 3, 26); */
    }

    .container {
        /* display: flex; */
        /* align-item:center; */
        /* justify-content: center; */
        /* flex-wrap:wrap; */
    }

    .btn1{
        display: flex;
        text-align:center;
        justify-content: center;
    }
    #bt:hover{
        /* background-color:black;
        color:white; */
    }
    @media screen and (max-width:993px){
        input{
            /* width:200px; */
            /* display:flex;
            align-items:center;
            flex-wrap:wrap;
            text-align:center; */
          
        }
        .op{
            /* display:flex;
            text-align:center;
            align-items:center;
            flex-wrap:wrap; */
        }
    }
    @media screen and (max-width:874px){
        input{
            /* width:200px; */
            /* display:flex;
            align-items:center;
            flex-wrap:wrap;
            text-align:center; */
        
        }
        .op{
            /* display:flex;
            align-items:center;
            flex-wrap:wrap;
            text-align:center; */
        }
    }
    </style>
</head>

<body>
    <form action="send_otp.php" method="post">
        <!-- <h1 style="color:yellow; text-align:center" class="op">Enter Registered Email For Feedback</h1> -->
        <!-- <div class="alert alert-info" role="alert"> -->

        </div>
        <?php   
         if(isset($_REQUEST['msg']))
         echo $REQUEST['msg'];

         ?>
        <div class="container">
            <label for="email" style="color:white; justify-content:center; font-size:20px"> Enter Registered Email For Feedback &nbsp; </label>
            <input type="email" id="email" name="email" placeholder="Enter your email" class="op" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
        </div>
    <p class="btn1">
        <button type="submit" id="bt" class="op">send OTP</button>
        </p>
    </form> 
</body>

</html>
<?php
//  include 'cdb.php';

?>

<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
//   $name=$_POST['name'];
  $email=$_POST['email'];
//   $desig=$_POST['desig'];
//   $company=$_POST['company'];
//   $number=$_POST['number'];
//   $feedBack=$_POST['feedBack'];
//   $Project=$_POST['Project'];
//   $user_otp=$_POST['user_otp'];



//Submit these to a database

//connection to the database 
$servername="localhost";
$username="root";
$password="";
$database="feedback";
echo "<br>";

 // Create a connection object

 $conn =mysqli_connect($servername, $username, $password, $database);
  //Die if connection was not successful

if(!$conn){
 die("Sorry we failed to connect:". mysqli_connect_error());
 }
 else{
    echo "Connection was successfull <br>"; 
 }

 //sql query to be executed
// $sql ="INSERT INTO `contactus` (`name`, `email`, `concern`, `date`) VALUES ('$name', '$email', '$desc', current_timestamp())";

$sql1="INSERT INTO `ratings` (`email`) VALUES ('$email')";
// INSERT INTO `feed0` (`email`) VALUES ('nishant125@gmail.com');
// $pt = $conn->sro;
// $last_id = $conn->insert_id;
// $_SESSION[email]=$email;
$_SESSION['email']=$email;
$res=mysqli_query($conn, $sql1);
}
?>