<?php
        session_start();
        include 'cdb.php';
        $email=$_SESSION['email'];
        $otp=$_POST["user_otp"];
        $sql="Select * from feed where email='$email' and user_otp='$otp'";
        $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if(mysqli_num_rows($rs)>0){
            $sql="update feed set user_otp='-' where email='$email'";
            $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            header("location:RRR/index.php");
        }else{
            echo "Password is Incorrect, Please Enter Correct Passwors";
        }

        ?>