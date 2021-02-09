<?php
$conn=mysqli_connect("localhost","root","mahek14");

if(!$conn){
    echo "No connection";
}

mysqli_select_db($conn,"banking_system");
?>
