<?php
// Connect to the Database
//INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'go to market', 'please buy a books', current_timestamp());
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
  $sro=$_GET['delete'];
  $delete=true;
  $sql="DELETE FROM `feed` WHERE `sro`=$sro";
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
                     <!-- Edit Modal
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModal">Edit Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/happy/feedback/feedback_data.php" method="post">
      <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit"> 
            <div class="mb-3">
            <label for="title" class="form-label">Edit Name</label>
            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
          </div>
        
 <div class="form-group">
     <label for="description">Note Description</label>
       <br>
    <textarea class="form-control"name="descriptionEdit" id="descriptionEdit" rows="3"></textarea>
 </div>
 <br>
      </div>
      <div class="modal-footer d-block mr-auto">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div> -->



<div class="container" my-4>

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Desig</th>
      <th scope="col">Company</th>
      <th scope="col">Number</th>
      <!-- <th scope="col">Feedback</th> -->
      <th scope="col">Project</th>
      <th scope="col">Actions</th>
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
$sql="SELECT * FROM `feed`";
$result=mysqli_query($conn, $sql);
$sro=0;
while($row =mysqli_fetch_assoc($result)){
    // echo var_dump($row)
    $sro++;
    echo " <tr>
      <th scope='row'>".$sro."</th>
      <td>". $row['name'] ."</td>
      <td>". $row['email'] ."</td>
      <td>". $row['desig'] ."</td>
      <td>". $row['company'] ."</td>
      <td>". $row['number'] ."</td>
      <td>". $row['Project'] ."</td>
       <td>  <button class='delete btn btn-sm btn-primary' id=d".$row['sro'].">Delete</button> </td>
    </tr>";
}
// <td>". $row['feedBack'] ."</td>
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
    //  edits=document.getElementsByClassName('edit');    
    //  Array.from(edits).forEach((element)=>{
    //   element.addEventListener("click",(e)=>{
    //     console.log("edit");
    //     tr=e.target.parentNode.parentNode;
    //     title=tr.getElementsByTagName("td")[0].innerText;
    //     description=tr.getElementsByTagName("td")[1].innerText;
    //     console.log(title,description);
    //     titleEdit.value=title;
    //     descriptionEdit.value=description;
    //     snoEdit.value=e.target.id;
    //     console.log(e.target.id);
    //     $('#editModal').modal('toggle');
    //   })
    //  })

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
     </script>
  </body>
</html>