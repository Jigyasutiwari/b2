<?php

include '_navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>

.container0{
        display:flex;
        justify-content:center;
        align-items:center;
     }
     .container1{
        display:flex;
        justify-content:center;
        align-items:center;
        text-decoration:none;
        text-decoration: none
        
     }
     .container2{
        display:flex;
        justify-content:center;
        align-items:center;
        text-decoration: none
     }
     #btn1{
        /* border:2px solid black; */    border: 8px solid black;
    background-color: black;
    color: white;
    border-radius: 5px;
    text-decoration: none

     }
     #btn2{
        /* border:2px solid red; */
        border: 8px solid black;
    background-color: black;
    color: white;
    border-radius: 5px;
    text-decoration: none
     }
     body{
        background-color: aqua;
     }

     @media screen and (max-width:260px){
        .container0{
            display:flex;
            justify-content:center;
            text-align:center;
            flex-wrap:wrap;
        }
        .container1{
            display:flex;
            justify-content:center;
            text-align:center;
            flex-wrap:wrap;
        }
        .container2{
            display:flex;
            justify-content:center;
            text-align:center;
            flex-wrap:wrap;
        }
     }


  </style>
</head>
<body>
    <br>
    <div class="container0">
      <h2>Feedback Systems</h2>
      </div>
           <br>
          <div class="container1">
           <div>
           <a  id="btn1" href="/happy/feedback/feedback_data.php">View Customer Details</a>
           <br>
           </div>
           </div>
         <br>

       <div class="container2">
           <div>
          <a id="btn2" href="/happy/feedback/view_rating.php">View Customer Ratings Details</a>
          </div>
     
          </div>


</body>
</html>















