<?php 
  session_start();
  $email=$_POST['email'];
  $passw=$_POST['passw'];

  if(!empty($email) || !empty($passw) )
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

     $sql ="SELECT * FROM users where email='$email' && passw='$passw'";
     $row=mysqli_query($conn , $sql);
     if(mysqli_num_rows($row) == 1)
     {  
        $sql1="SELECT * FROM users where email= '$email' and passw='$passw' ";
        $result=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result);
         $_SESSION["email"]=$row["email"];
         $_SESSION["fname"]=$row["fname"];
         $_SESSION["lname"]=$row["lname"];
         $_SESSION["phonenum"]=$row["phone"];
         header('location:../php/resturant1.php');
     }
     else
     {
       echo"
       <script>
        alert('Incorrect Email or Password');
        var timer = setTimeout(function() {
            window.location='../html/login.html'
        }, 0);
      </script> ";
      
     }


}  
 else
 {
     echo "All fields are required";
 }

?>
 