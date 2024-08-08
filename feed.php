<?php
   include '_navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="feed001.css"> -->
    <!-- <link rel="stylesheet" href="feed0002.css"> -->
     <link rel="stylesheet" href="feeb000002.css">
  <style>

 /* .fbf{
    display:flex;
    justify-content:center;
    align-items:center;
    color:blue;
 }
 #btn{
    width: 80px;
 }
 #reset{
    width: 80px;
 } */

  </style>

</head>

<body>
    <table id="fb" cellspacing="6" cellpadding="1" style="border-collapse:separate;color:white;">
    
        <form action="/HAPPY/feedback/feed.php" method="post" class="feedB">
        <tr>
                <td>
                <h6  style="font-size:25px; color:yellow">Fill following details</h6>
                </td>

            </tr>
       
            <tr>
                
                <td> 
                <!-- <p  style="font-size:25px">Please fill following details</p> -->
                    <label for="name" class="ln"> Name</label>
                </td>
                <td> <input type="text" id="name" class="fbf" width="20px" size="45" style="border-radius:5px;"  placeholder="Enter your name"
                        name="name"  required> 
                </td>

                <td>
                    <label for="desig" class="ln"  >&nbsp; &nbsp; Designation &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                </td>
                <td>
                    <input type="text" id="desig" class="fbfb" size="45"style="border-radius:5px;" placeholder="Enter your designation"
                        name="desig" required pattern="[A-Za-z]{1,32}">
                </td>


            </tr>


            <tr>
                <td>
                    <label for="company" class="ln">Company</label>
                </td>
                <td>
                    <input type="text" id="company" class="fbf" size="45" style="border-radius:5px;" placeholder="Enter your company name"
                        name="company" required pattern="[A-Za-z]{1,32}">


                </td>



                <td>
                    <label for="project" class="ln" > &nbsp; &nbsp; Project</label>
                </td>
                <td>
                    <select name="Project" id="Project" class="fbfb" size="" readdired>
                        <option value="---" >Select</option>
                        <option value="IT">IT</option>
                        <option value="General">General</option>
                        <option value="Other">Other</option>
                    </select>
                    <br>
                </td>

            </tr>

            <tr>

            <td>
                    <label for="email" class="ln">Email Address</label>
                </td>
                <td>
                    <!-- <input  pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'required type="email" id="email" placeholder="Enter your email" name="email"> -->
                    <!-- <input id="email" type="text" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}" required placeholder="Enter you Email"> -->
                    <input type="email" id="email" class="fbf" name="email" style="border-radius:5px;" size="45"
                        pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                        placeholder="Enter your email">
                </td>

                <td>
                    <label for="number" class="ln"> &nbsp; &nbsp; Mobile No</label>
                </td>
                <td>
                    <!-- <input type="text" id="number" placeholder="Enter your mobile number" name="number" required pattern="^[0-9]*$"> -->
                    <input type="text" name="number" class="fbfb" id="number"  style="border-radius:5px;" size="45" pattern="[1-9]{1}[0-9]{9}"
                        title="Please enter exactly 10 digits" placeholder="Enter your mobile number" required>

                </td>
               
            </tr>

            <tr>
                <td>
                <h6  style="font-size:25px; color:yellow"> Contact Point in TCIL </h6>
                </td>

            </tr>
            
            <tr>
                
            <td>
                    <label for="Tcil_Emp_Name" class="ln"> Name</label>
                </td>
                <td> <input type="text" id="Tcil_Emp_Name" class="fbf" width="20px" size="45" style="border-radius:5px;" placeholder="Enter name"
                        name="Tcil_Emp_Name" required>
                </td>


                <td>
                    <label for="Tcil_Emp_Designation" class="ln"> &nbsp; &nbsp;Designation</label>
                </td>
                <td>
                    <input type="text" id="Tcil_Emp_Designation" class="fbfb" size="45" style="border-radius:5px;" placeholder="Enter  designation"
                        name="Tcil_Emp_Designation" required pattern="[A-Za-z]{1,32}">
                </td>
            </tr>

            <tr>


            <td>
                    <label for="Tcil_Emp_Email_Address" class="ln">Email Address</label>
                </td>
                <td>
                    <!-- <input  pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'required type="email" id="email" placeholder="Enter your email" name="email"> -->
                    <!-- <input id="email" type="text" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}" required placeholder="Enter you Email"> -->
                    <input type="email" id="Tcil_Emp_Email_Address" class="fbf" name="Tcil_Emp_Email_Address" style="border-radius:5px;" size="45"
                        pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                        placeholder="Enter  email">
                </td>

                <td>
                    <label for="Tcil_Emp_Mobile_No" class="ln"> &nbsp; &nbsp;Mobile No</label>
                </td>
                <td>
                    <!-- <input type="text" id="number" placeholder="Enter your mobile number" name="number" required pattern="^[0-9]*$"> -->
                    <input type="text" name="Tcil_Emp_Mobile_No" class="fbfb" id="Tcil_Emp_Mobile_No" size="45" style="border-radius:5px;" pattern="[1-9]{1}[0-9]{9}"
                        title="Please enter exactly 10 digits" placeholder="Enter  mobile number" required>

                </td>



            </tr>


            <tr>
                <td>
                    <button type="submit" id="btn" class="fbf">Submit</button>
                
                </td>
                <td>
                    <input type="reset" id="reset" class="fbf">

                </td>
            </tr>

        </form>

    </table>
</body>

</html>

<?php 
// include 'feed0.php';
// include 'send_otp.php';
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $desig=$_POST['desig'];
  $company=$_POST['company'];
  $number=$_POST['number'];
  $Project=$_POST['Project'];
  $Tcil_Emp_Name=$_POST['Tcil_Emp_Name'];
  $Tcil_Emp_Designation=$_POST['Tcil_Emp_Designation'];
  $Tcil_Emp_Email_Address=$_POST['Tcil_Emp_Email_Address'];
  $Tcil_Emp_Mobile_No=$_POST['Tcil_Emp_Mobile_No'];



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
    // echo "Connection was successfull <br>"; 
 }

 //sql query to be executed
// $sql ="INSERT INTO `contactus` (`name`, `email`, `concern`, `date`) VALUES ('$name', '$email', '$desc', current_timestamp())";

$sql="INSERT INTO `feed` (`name`, `email`, `desig`, `company`, `number`,`Project`, `Tcil_Emp_Name`, `Tcil_Emp_Designation`, `Tcil_Emp_Email_Address`,`Tcil_Emp_Mobile_No`) VALUES ('$name ', '$email', '$desig', '$company', '$number', '$Project', '$Tcil_Emp_Name', '$Tcil_Emp_Designation', '$Tcil_Emp_Email_Address', '$Tcil_Emp_Mobile_No')";
// $pt = $conn->sro;
// $last_id = $conn->insert_id;
$_SESSION['email']=$email;




$res=mysqli_query($conn, $sql);
if($res){
    
        
    $to_email="$email";
    $to_email2="$Tcil_Emp_Email_Address";
    $subject="Simple Email Test via PHP";
    $body="!JAY SHREE RAM!";
    $headers="From:jigyasutiwari593@gmail.com";
    // $headers .="Content-type: text/html";  
   
    if(mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    }
     else {
        echo "Email sending failed sorry...";
    }

    if(mail($to_email2, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email2... ";
    }
     else {
        echo "Email sending failed sorry...";
    }

        


}
if($res){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been summitted successfull.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
//  header("location: feed0.php");
  }
else{
    echo "the record was not inserted successfully because of this error--->" . mysqli_error($conn);
}
}


 
?>