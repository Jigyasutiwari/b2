
<!doctype html>
<html lang="ar" dir="ltl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="__navbar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Navbar</title>

    <style>

      #login:hover{

        color:black;
        background-color:white;
    
      }
      #signup:hover{
        color:black;
        /* border:0.001px solid white; */
        background-color:white;
    
      }
      #home:hover{
        color:black;
        background-color:white;
 
       
      }

     
    </style>
  </head>
  <body>
    <!-- <h1>I am Navbar</h1> -->
    
<!-- navbar-dark  bg-dark -->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark" id="na">
  <div class="container-fluid">
    <img src="tcil.png"  alt="image"  width="50" height="50"   id="img" style="background-color:white"> 
    <a class="navbar-brand text-center"  href="#" id="tcil" >Telecommunications Consultants India Limited</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link active" aria-current="page" href="/happy/feedback/signup1.php" id="signup">Signup</a> -->
        <!-- </li> -->
        <li class="nav-item">
          <a class="nav-link" href="/happy/feedback/feed0.php" id="login">Customer Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/happy/feedback/login1.php" id="login">Login</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link "  href="/happy/feedback/feed.php" id="home">Home</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search"> -->
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      <!-- </form> -->
    </div>
  </div>
</nav>


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