<?php

$dish=$_POST["dishname"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];

if(!empty($dish) || !empty($price)|| !empty($quantity))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="foodjunction";

    $conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

    if(!$conn)
    {
        echo " Error in connection";
    }

       $sql3= "CREATE TABLE dominos
       (
        id int NOT NULL AUTO_INCREMENT,
       dish varchar(50),
       price varchar(50),
       quantity varchar(50),
       PRIMARY KEY (ID)
       )";           
         mysqli_query($conn , $sql3);

         $sql = "INSERT INTO dominos(dish,price,quantity) VALUES('$dish','$price','$quantity')";
        
         mysqli_query($conn , $sql);
         echo "menu added";   

    $sql1 ="SELECT * FROM dominos where dish='$dish'";
    $row=mysqli_query($conn , $sql1);
    if(mysqli_num_rows($row) >0)
       {
          echo "already Added";        
        }
     else
         {
         
          }

}
else{
    echo "all field are required";
    die();
}
?>