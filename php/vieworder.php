<?php
session_start();
$_SESSION["refresh"]="no";
$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="foodjunction";

$conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

if(!$conn)
{
    echo " Error in connection";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mark3</title>
    <link rel="stylesheet" href="../css/normalized.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/vieworder.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark navbar-custom sticky-top"> 
       <div class="container-fluid">
          <a class="navbar-brand" href="../html/mark3.html">Food hub</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../php/logout.php"> Log out </a> </li>
                </ul>
            </div>
       </div>
    </nav>
<div class="container-fluid def">
<div>
  <h1 class="display1 text-center ">Your order</h1>
<div class="container-fluid data">
  <?php 
     $id=1;
     $sql="SELECT * FROM bills where id=$id";
        $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_array($result))
      {    
        
     ?>
       <div class="container-fluid content">
           <table class="table table-hover">
           <tr><td class="text-center"><h2 class="display2" style=" text-transform: capitalize;"><b>Welcome <?php echo $row["name"] ?><?php echo $row["lname"] ?> <br></h2></td></tr>
           <tr><td class="text-center">phone:-<?php echo $row["phonenum"] ?> <br></td></tr>
           <tr><td class="text-center">Email:-<b class="text-center"> <?php echo $row["email"] ?>. <br></td></tr>
           <tr><td class="text-center">Address:-<b> <?php echo $row["address"] ?>. <br></td></tr>
           <tr><td class="text-center">Your dish:-<b> <?php echo $row["dish"] ?>. <br></td></tr>
           <tr><td class="text-center">Quantity:-<b> <?php echo $row["amount"] ?>. <br></td></tr>
           <tr><td class="text-center">Amount to be paid:-<b> Rs<?php echo $row["grandtotal"] ?>. <br></td></tr>
      </table>
      </div>     
      <?php
      }
      ?>
        <a href="../mark3.html"><button class="btn btn-default">Home</button><a>
 

  </div>
  <div>
</div>
</body>
</html>