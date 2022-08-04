<?php
$hostname = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "maruf";

$conn = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("ERROR".mysqli_connect_error($conn));
}else{
    //echo "Connect Successfull";
}
