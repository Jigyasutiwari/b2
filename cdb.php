<?php
$server="localhost";
$username="root";
$password="";
$database="feedback";

$conn=mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("Error".mysqli_connect_error());
}

?>


<?php
// $servername = "localhost";
// $username = "root"; // or your MySQL username
// $password = ""; // or your MySQL password
// $dbname = "feedback";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>
