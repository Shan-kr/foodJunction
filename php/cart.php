<?php
  session_start();

  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="foodjunction";

$conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

if(!$conn)
{
    echo " Error in connection";
}

/*
  if(isset($_POST["add"])){
     
    if(isset($_SESSION["shopping_cart"])){
     
     $item_array_id=array_column($_SESSION["shopping_cart"],"id");
     if(!in_array($_POST["id"],$item_array_id))
     {
       $cnt=count($_SESSION["shopping_cart"]);
       $item_array= array(
        'id' => $_POST["id"],
        'dish'=>$_POST["dish"],
        'price'=>$_POST["price"],
        'quantity'=>$_POST["quantity"],
        'amount'=>$_POST["amount"]);
        $_SESSION["shopping_cart"][$cnt]=$item_array;
     }
     else{
        header('location:../html/alreadyadded.html');
     }
    }
    else{
      $item_array= array(
        'id' => $_POST["id"],
        'dish'=>$_POST["dish"],
        'price'=>$_POST["price"],
        'quantity'=>$_POST["quantity"],
        'amount'=>$_POST["amount"],
      );
      $_SESSION["shopping_cart"][0]=$item_array;
    }
  }*/
  if(isset($_GET["action"]))
  {
    if($_GET["action"]=="delete")
    {
      foreach($_SESSION['cart'] as $key =>$value){
        if($value["product_id"]==$_GET["id"])
         unset($_SESSION['cart'][$key]);
         echo "<script>alert('Product has been Removed')</script>";
         echo "<script>window.location='cart.php'</script>";

      }
    }
   
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalized.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cartt.css">
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
  <h1 class="display1 text-center text-light">Cart</h1>
  <div class="container-fluid">
  <div class="table-responsive"> 
    <table class="table table-hover">
          <tr >
              <th class="text-light"> Srno. </th>
              <th class="text-light"> Name </th>
              <th class="text-light"> Quantity </th>
              <th class="text-light"> price in (RS) </th>
              <th class="text-light"> Total </th>
              <th class="text-light"> Remove </th>
          </tr>             
<?php 
/*$srno=1;
$gtotal=0;
if(!empty($_SESSION["shopping_cart"]))
{
foreach($_SESSION["shopping_cart"] as $keys =>$values)
{
$total= $values["price"] * $values["amount"];
$gtotal= $gtotal+$total;    
*/
?>          

<?php
$product_id=array_column($_SESSION['cart'],'product_id');
$sql="SELECT * FROM dominos";
        $result=mysqli_query($conn,$sql);
        $srno=0;
        $gtotal=0;
        while($row=mysqli_fetch_array($result))
        {    
        
          foreach($product_id as $id ){
            if($row['id']==$id){
              $total= $row["price"];
              $gtotal= $gtotal+$total;
              $srno++;
            ?>
         <form method="post" action="checkout.php" id="form1">       
             <tr class="customtab">
               <td class="text-light"> <?php echo $srno ?> <input type="hidden" name="srno[]" value="<?php echo $srno ?>"> </td>  
               <td class="text-light"> <?php echo $row["dish"] ?><input type="hidden" name="dish[]" value="<?php echo $row["dish"] ?>"> </td>
               <td class="text-light"> <?php echo $row["quantity"]  ?><input type="hidden" name="quantity[]" value="<?php echo $row["quantity"] ?>"> </td>
               <td class="text-light"> <?php echo $row["price"]  ?><input type="hidden" name="price[]" value="<?php echo $row["price"] ?>"> </td>
               <td class="text-light"> <?php echo $total ?> </td>
               <input type="hidden" name="gtotal" value="<?php echo $gtotal ?>">
               <input type="hidden" name="id[]" value="<?php echo $row["id"] ?>">
             <!--<td> <input type="button" class="btn btn-primary" name="event" value="update"></td>-->
             <!--td> <a href="cart.php?action=update&id=<?//php echo$values["id"];?>"><span class="Text-danger">update</span></a></td-->
              <td> <a href="cart.php?action=delete&id=<?php echo $row["id"] ;?>"><span class="Text-danger text-light">Remove</span></a></td>
              </tr>            
            <?php 
            }
          }
        }
?>
            <tr>
              <td class="text-light">Grand Total</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
             <td class="text-light"> <?php echo $gtotal;?> </td>
             </tr>
             </table>
      </div>
    
    <table class="table table-hover">
       <tr>
            <td>
                <label class="text-light">Your Address </label></td><td>
                   <textarea class="text-dark textarea" name="info" form="form1">Your Address</textarea> 
            </td>
      </table>
     
                   <button type="submit" name="submit" class="btn btn-default"><b>Placeorder</button>
        </form>
        

      

</div>    
</div>

</body>
</html>