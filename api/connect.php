<?php
#variable
$connect=mysqli_connect("localhost","root","","voting") or die("connection failed");
#checking if database connection is established or not
if($connect){
    echo "Database connection established";
}
else{
    echo "Database connection not established";
}
?>