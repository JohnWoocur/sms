<?php
include "db.php";
$name=$_POST["name"];
$city=$_POST["city"];
$phonenumber=$_POST["phoneno"];
$email=$_POST["email"];
 
$sql="INSERT INTO admits(Name,City,PhoneNO,Email) VALUES('$name','$city','$phonenumber','$email')";
mysqli_query($conn,$sql);
?>