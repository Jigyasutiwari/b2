<?php
session_start();
include 'cdb.php';
// include 'feed0.php';

$email=$_POST["email"];
// $user_otp=$_POST["otp"];
$sql="Select * from feed where email='$email'";
$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// $flag=true;
if(mysqli_num_rows($rs)>0){
    $_SESSION['email']=$email;
    $otp=rand(11111,99999);
    echo "Email Found:".$otp;
    $sql="update feed set user_otp='$otp' where email='$email'";
     $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
     header("location:verify.php?msg=Please Check Your Email For OTP and Verify!");
    
    $to_email="$email";
    $subject="Simple Email Test via PHP";
    $body="This  OTP is valid  for 5 minutes:: $otp" ;
    $headers="From:jigyasutiwari593@gmail.com";
    // // $headers .="Content-type: text/html";  
    
    if(mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
        // $otp=" ";
    }
     else {
        echo "Email sending failed sorry...";
    }

    
    // $sql="update feed set user_otp='$otp' where email='$email'";
    // $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    // header("location:verify.php?msg=Please Check Your Email For OTP and Verify!");
    // $flag=false;
    // ?msg=Please Check Your Email For OTP and Verify!
    // if($flag==false){
    //         $sql="update feed set user_otp='' where email='$email'";
    //         $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    // }
}
// elseif($flag==false)  {
//     $sql="update feed set user_otp='' where email='$email'";
//     $rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// }
else{
    // echo "Email not found!";
    header("location:verify.php?msg=Email is Invalid ...Plz Check Again!");
    // header("location:feed.php?msg=Email is Invalid ...Plz Check Again!");
    // ?msg=Email is Invalid ...Plz Check Again!
}


?>