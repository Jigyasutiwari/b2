<?php
// Connect to the Database
$update=false;
$delete=false;
$servername="localhost";
$username="root";
$password="";
$database="feedback";
  require  '_navbar.php';
 // Create a connection object
 $conn =mysqli_connect($servername, $username, $password, $database);
 if(!$conn){
  die("Sorry we failed to connect:". mysqli_connect_error());
  }
 if(isset($_GET['delete'])){
  $ide=$_GET['delete'];
  $delete=true;
  $sql="DELETE FROM `ratings` WHERE `ide`=$ide";
  $result=mysqli_query($conn, $sql);
  
 }
?>
<!doctype html>
<html lang="en" dir="ltl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <!-- <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script> -->
    <!-- this is comment -->
    <title>Feedback Data</title>

  </head>
  <body>
                    
<div class="container" my-4>

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Email</th>
      <th scope="col">Item_Name</th>
      <th scope="col">Rating</th>
      <th scope="col">Action</th>
    </tr>
   </thead>
   <tbody>
   <?php
if($delete){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your note has been Deleted successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

  <?php
$sql="SELECT * FROM `ratings`";
$result=mysqli_query($conn, $sql);
$ide=0;
while($row =mysqli_fetch_assoc($result)){
    // echo var_dump($row)
    $ide++;
    echo " <tr>
      <th scope='row'>".$ide."</th>
      <td>". $row['email'] ."</td>
      <td>". $row['item_id'] ."</td>
      <td>". $row['rating'] ."</td>
       <td>  <button class='delete btn btn-sm btn-primary' id=d".$row['ide'].">Delete</button> </td>
    </tr>";
}

?>

</tbody>
</table>
</div>
<hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>
<script> 

     deletes=document.getElementsByClassName('delete');    
     Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit",);
        ide=e.target.id.substr(1,);
         if(confirm("Are you sure want to delete this note!")){
          console.log("yes");
          window.location=`/happy/feedback/view_rating.php?delete=${ide}`;
         }else{
          console.log("no");
         }
      })
     });

     /*
          deletes=document.getElementsByClassName('delete');    
     Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit",);
        sro=e.target.id.substr(1,);
         if(confirm("Are you sure want to delete this note!")){
          console.log("yes");
          window.location=`/happy/feedback/feedback_data.php?delete=${sro}`;
         }else{
          console.log("no");
         }
      })
     });
     
     
     
     */
     </script>
  </body>
</html>