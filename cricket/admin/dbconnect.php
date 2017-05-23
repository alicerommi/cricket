<?php
$servername= "localhost";
$username= "root";
$dbname="administrator_db";
$dbpassword="";

$conn = mysqli_connect("localhost","root","administrator_db","");
if(!$conn){
	
	echo "Conection Failed ".mysqli_connect_error();
}

?>