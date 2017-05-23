<?php 

$servername="localhost";
$username= "root";
$password="";
$dbname="diamond_db";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){

	echo "connection failed ".mysqli_connect_error();
}


?>