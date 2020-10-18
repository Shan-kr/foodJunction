<?php
session_start();

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $passw=$_POST['passw'];
 $emailses=$_SESSION["email"];


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

$sql="UPDATE users SET fname='$fname', lname='$lname' ,email='$email',passw='$passw'  WHERE email='$emailses'";
mysqli_query($conn,$sql);  
header('location:../php/profile.php');

   ?>