<?php
session_start();

if(isset($_POST["add"])){
 //print_r($_POST[id]);
 if(isset($_SESSION['cart'])){
    
   $item_array_id=array_column($_SESSION['cart'],"product_id");
   
    if(in_array($_POST["id"],$item_array_id)){
      echo "<script> alert('Items already added')</script>";
      echo "<script> window.location='dominosin.php'</script>";
    }
    else{
      $count=count($_SESSION['cart']);
      $item_array=array(
        'product_id'=>$_POST['id']
      );
      $_SESSION['cart'][$count]=$item_array;
      
    }
    }
 else{
   $item_array=array(
     'product_id'=>$_POST['id']
   );
   $_SESSION['cart'][0]=$item_array;
   
 }
}



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
    <link rel="stylesheet" href="../css/dominos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark navbar-custom sticky-top"> 
       <div class="container-fluid">
          <a class="navbar-brand" href="../html/mark3.html">Food hub</a>
          <div class="dropdown dropleft">
            <button type="button" class="btn btn-defaultdropdown-toggle text-light" data-toggle="dropdown"><b> Menu </b>
             <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </button>
     <div class="dropdown-menu" >
        <ul class="list-group list-group-item-action">
        <a href="../php/profile.php"style="color:white;"><li class="dropdown-item list-group-item text-dark">Profile</li> </a>
        <a href="cart.php"style="color:white;"><li class=" dropdown-item list-group-item text-dark"> Cart
        <span class="badge badge-primary badge-pill"></span>
        <?php
          if(isset($_SESSION['cart'])){
            $count=count($_SESSION['cart']);
             echo "<span class=\"badge badge-primary badge-pill\">$count</span>";
          }
            else{
              echo "<span class=\"badge badge-primary badge-pill\"> ! </span>";
            }
        ?>
        </li> </a>
        <a href="../html/contact.html" style="color:white;"> <li class="dropdown-item list-group-item text-dark">Contact</li></a>
        <a href="#" style="color:white;"> <li class="dropdown-item list-group-item text-dark">See timing</li> </a>
        <a href="../php/logout.php" style="color:white;"> <li class="dropdown-item list-group-item text-dark">Logout</li> </a>
        </ul>
      </div>     
  </div>
       </div>
    </nav>
<div class="container-fluid">
  <h1 class="display1 text-center text-light">Dominos</h1>
<div class="container-fluid data">
<div class="row">
 <div class="col">
 <div class="message"></div>
 <div class="main ">
 <table class="table table-hover">
  <?php 

     $sql="SELECT * FROM dominos";
        $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_array($result))
      {    
        
        ?>
          <form method="post">
                 <tr scope="row custtable">
                 <td class="text-light"><b> <?php echo $row["dish"] ?> </td>
                 <td class="text-light"><b> <?php echo $row["price"] ?> </td>
                 <td class="text-light"><b> <?php echo $row["quantity"] ?> </td>
                 <td class="text-light"><b> <input type="number"  name="amount" value="1" style="width:40%;"> </td>
                 <input type="hidden"  name="dish" value="<?php echo $row["dish"] ?>">
                 <input type="hidden"  name="id" value="<?php echo $row["id"] ?>">
                 <input type="hidden"  name="price" value="<?php echo $row["price"] ?>">
                 <input type="hidden"  name="quantity" value="<?php echo $row["quantity"] ?>">
                <td> <input type="submit"  name="add" class="btn btn-primary float-right" value="add"> </td>
                 </tr>
                 </form>
       <?php          
       }
  ?>
</table>
   </div>
 </div>
</div>
</div>
</div>
</div>
</body>
</html>
