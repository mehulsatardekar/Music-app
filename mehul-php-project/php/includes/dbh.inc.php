<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname ="mehultest";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
    die("connection failed try again" .mysqli_connect_error());

}
else{
    echo "<script> console.log('database connected') </script>";
}






