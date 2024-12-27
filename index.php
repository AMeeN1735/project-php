<?php 
$host="localhost";
$username="root";
$password="";
$dbname="mytest";

$connect_database =mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "not connected";
    exit();

}
else{
    echo "connected";
}







?>