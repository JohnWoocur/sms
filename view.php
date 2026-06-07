<?php
echo "View Mentals!! </br>";

include "db.php";

$sql = "SELECT * FROM admits";
$res = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
    {
        echo "id: ".$row["Id"]."</br>";
        echo "Name: ".$row["Name"]."</br>";
        echo "City: ".$row["City"]."</br>";
        echo "PhoneNo: ".$row["PhoneNO"]."</br>";
        echo "Email: ".$row["Email"]."</br>";
    }
?>

