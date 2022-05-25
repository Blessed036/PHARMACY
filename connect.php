<?php
$host="localhost";
$user="root";
$password="Gyyh1306";
$db_name="";

$conn=mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_error()){
    die("fail to connect: ".mysqli_connect());
}
?>