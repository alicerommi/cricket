<?php

session_start();




?>


<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <title>Diamond Cricket Club</title>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="../assets_client/engine1/style.css" />
    <script type="text/javascript" src="../assets_client/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
	
  
  </head>
  <?php
  include("../common_client/master.php");

  ?>
  <body>
  <!-- navbar for desktop display -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- navbar for mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class = "active"><a href="index.php">Home</a></li>
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
      
				  <li ><a href="member_profiles.php">Member Profiles</a></li>
                      <li><a href="Login.php" id="myLogin">Login</a></li>
                        <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					   <li><a href="profile.php">Your Profile</a></li>
                    
                  </ul>				 
				</div><!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!-- menubar area end -->
  <!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
        <li>
          <img src="../assets_client/data1/images/img1.jpg" alt="" title="" id="wows1_0" />
        </li>
        <li>
          <img src="../assets_client/data1/images/img2.jpg" alt="img2" title="img2" id="wows1_1" />
        </li>
        <li>
          <img src="../assets_client/data1/images/img3.jpg" alt="img3" title="img3" id="wows1_2" />
        </li>
        <li>
          <img src="../assets_client/data1/images/img4.jpg" alt="cssslider" title="" id="wows1_3" />
        </li>
        <li>
          <img src="../assets_client/data1/images/img5.jpg" alt="" title="" id="wows1_4" />
        </li>
      </ul>
    </div>
    <div class="ws_bullets">
      <div>
      <a href="#" title="">
        <span>
        <img src="../assets_client/data1/tooltips/img1.jpg" alt="" />1</span>
      </a> 
      <a href="#" title="img2">
        <span>
        <img src="../assets_client/data1/tooltips/img2.jpg" alt="img2" />2</span>
      </a> 
      <a href="#" title="img3">
        <span>
        <img src="../assets_client/data1/tooltips/img3.jpg" alt="img3" />3</span>
      </a> 
      <a href="#" title="">
        <span>
        <img src="../assets_client/data1/tooltips/img4.jpg" alt="" />4</span>
      </a> 
      <a href="#" title="">
        <span>
        <img src="../assets_client/data1/tooltips/img5.jpg" alt="" />5</span>
      </a></div>
    </div>
    <div class="clearfix">
      <div class="ws_shadow"></div>
    </div>
  </div>
  <br />
  <br />
  <footer class="container-fluid text-center" style="padding:1rem; position: absolute; right: 0; bottom: 0; left: 0;">
    <p>Diamond Cricket Club, Islambad, G-8/2, Pakistan</p>
  </footer>
  <!-- for slider -->
  <script type="text/javascript" src="../assets_client/engine1/wowslider.js"></script> 
  <script type="text/javascript" src="../assets_client/engine1/script.js"></script></body>
</html>
