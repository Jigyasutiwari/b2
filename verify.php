<?php
 include 'cdb.php';
 include '_navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
    body{
      /* background-color:aqua; */
      background-color: #2c3e50;
      color:white;
    }
        .otp{
            margin-top:30px;
        }
     .otp{
        display:flex;
        justify-content: center;
     }
     .otp1{
        display:flex;
        justify-content: center;
     }

#veri{
   /* border:3px solid red; */
}

     @media screen and (max-width:260px) {
        .otp{
            display:flex;
            justify-content:center;
            color:blue;
        }
        input{
           width:50%; 
        }
     }
     @media screen and (max-width:180px) {
        /* .otp{
            display:flex;
            justify-content:center;
            color:blue;
        } */
        input{
           width:100%; 
        }
     }
    </style>
</head>

<body>

    <form action="next.php" method="post" id="veri">
        <div class="otp">
        <?php   
         if(isset($_REQUEST['msg']))
         echo $_REQUEST['msg'];
         ?>
         </div>
         <div class="otp">
        <label for="number" style="color:white"> Enter OTP: </label>

        <input type="number" id="number" name="user_otp" placeholder="Enter 5th Digit OTP">
      
      </div>
     
      <p class="otp1">
        <button type="submit">Verify OTP</button>
        </p>
    </form>
</body>

</html>

<?php
        // session_start();
        // include 'cdb.php';
        // $email=$_SESSION['email'];
        // $otp=$_POST["user_otp"];
        // $sql="Select * from feed where email='$email' and user_otp='$otp'";
        // $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        // if(mysqli_num_rows($rs)>0){
        //     header("location:RRR/index.php");
        // }else{
        //     // echo "Password is Incorrect, Please Enter Correct Passwors";
        // }

        ?>