<?php
include('db.php');

$action = $_GET['action'];

switch ($action) {
		case 'request':
		$status="";
		$memberid="";
$memberid=$_GET["memberid"];
$type=	$_GET["type"];

if($type=="accept"){$status="active";}
if($type=="reject"){$status="reject";}	

$query="UPDATE `membership` SET `status`='$status' WHERE `id`=$memberid";
	mysqli_query($conn,$query);
		header("location:../membershiprequest.php");
		break;
		
		}
