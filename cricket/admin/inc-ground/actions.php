<?php
include('db.php');

$action = $_GET['action'];

switch ($action) {
		case 'request':
		$status="";
		$userid="";
$userid=$_GET["requestid"];
$type=	$_GET["type"];
#echo $userid;


if($type=="accept"){$status="active";}
if($type=="reject"){$status="reject";}	

$query="UPDATE `groundbooking` SET `status`='$status' WHERE `id`=$userid";
	#echo $query; 
	
	mysqli_query($conn,$query);

		header("location:../groundrequests.php");
		break;
		
		}
