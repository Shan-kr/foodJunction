<?php 
session_start();
$allid=$_POST["id"];
$srno=$_POST["srno"];
$dish=$_POST["dish"];
$price=$_POST["price"];
$address=$_POST["info"];
$quantity=$_POST["quantity"];
$amount=$_POST["amount"];
$gtotal=$_POST["gtotal"];

 /*print_r($dish);
 print_r($srno); '<br>';
print_r($dish);'<br>';
print_r($price);'<br>';
print_r($quantity);'<br>';
print_r($amount);'<br>';
echo "$gtotal";'<br>';*/

$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="foodjunction";

$conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

if(!$conn)
{
    echo " Error in connection";
}


  $srno=implode(',',$srno);
  $dish=implode(',',$dish);
  $price=implode(',',$price);
  $quantity=implode(',',$quantity);
  $amount=implode(',',$amount);
  $fname= $_SESSION["fname"];
  $email=$_SESSION["email"];
  $lname= $_SESSION["lname"];
  $phonenum=$_SESSION["phonenum"];
  $gtotal;
    
  $sql2="CREATE TABLE bills (
     id int NOT NULL AUTO_INCREMENT,
     fname text NOT NULL,
     lname text NOT NULL,
     phonenum text NOT NULL,
    email varchar(60) NOT NULL,
    address varchar(100) NOT NULL,
    dish text NOT NULL,
    quantity text NOT NULL,
    amount text NOT NULL,
    price text NOT NULL,
    grandtotal int(50) NOT NULL,
    PRIMARY KEY (ID)

  ) ";
   
   mysqli_query($conn,$sql2); 
  $sql = "INSERT INTO bills(fname,lname,phonenum,email,address,dish,quantity,amount,price,grandtotal) VALUES('$fname','$lname','$phonenum','$email','$address','$dish','$quantity','$amount','$price','$gtotal')";
            
  mysqli_query($conn,$sql);
  $last_id = mysqli_insert_id($conn);
 
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
    <link rel="stylesheet" href="../css/checkout.css">
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
<div class="container-fluid">
  <h1 class="display1 text-center ">Success</h1>
        <h2 class="display2 text-center"> Your ordered Id is:-<?php echo "$last_id"?></h2> 
</div>
<div class="container-fluid">
  <h1 class="display1 text-center ">Your order</h1>
<div class="container-fluid data">
  <?php 
     
     $sql="SELECT * FROM bills where id=$last_id";
        $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_array($result))
      {    
        
     ?>
       <div class="container-fluid content">
           <table class="table table-hover">
           <tr><td class="text-center"><h2 class="display2" style=" text-transform: capitalize;"><b>Welcome <?php echo $fname ?> <?php echo $lname ?><br></h2></td></tr>
           <tr><td class="text-center">phone:-<?php echo $phonenum ?> <br></td></tr>
           <tr><td class="text-center">Email:-<b class="text-center"> <?php echo $email ?>. <br></td></tr>
           <tr><td class="text-center">Address:-<b> <?php echo $row["address"] ?>. <br></td></tr>
           <tr><td class="text-center">Your dish:-<b> <?php echo $row["dish"] ?>. <br></td></tr>
           <tr><td class="text-center">Quantity:-<b> <?php echo $row["amount"] ?>. <br></td></tr>
           <tr><td class="text-center">Amount to be paid:-<b> Rs<?php echo $row["grandtotal"] ?>. <br></td></tr>
      </table>
      </div>     
      <?php
      }
      ?>
        <a href="../php/resturant1.php"><button class="btn btn-default">Home</button><a>

</div>
</div>
</body>
</html>