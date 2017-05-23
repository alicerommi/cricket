<?php
include("../common_client/db.php");
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Member Profiles</title>

</head>
<?php
include("../common_client/master.php");
#$count_query = "COUNT `name` FROM `membership` WHERE `status` = 'active' ";
#$res=mysqli_query($conn,$count_query);
#echo $res;
?>
<body>

<!-- navbar for desktop display -->
				<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- navbar for mobile display -->
				<div class="navbar-header" >
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="#">Match Selection</a></li>
						<li><a href="#">Winning Award Lists</a></li>
						<li><a href="#">Upcoming Match List</a></li>
						<li class="divider"></li>
						<li><a href="groundbooking.php">Ground Booking</a></li>
						<li><a href="membershipform.php">MemberShip Form</a></li>
						<li><a href="calculator.php">Use DL Calculator</a></li>
					  </ul>
					</li>
      
				  <li class="active"><a href="member_profiles.php">Member Profiles</a></li>
                      <li><a href="login.php">Login</a></li>
                  
                        <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
                    
                  </ul>	
				  
				</div><!-- /.navbar-collapse -->
				</div>
<!-- /.container-fluid -->
			</nav>

			<!-- menubar area end -->
		


















		
			<footer class="container-fluid text-center" style="padding:1rem; position: absolute;
  right: 0;
  bottom: 0;
  left: 0;">
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>