<?php
session_start();

$member_email=$_SESSION['member_email'];

if ($member_email != null)
	header("Location: index.php");

$servername= "localhost";
$username="root";
$password = "";
$dbname="diamond_db";
#work stop first i will make the admin login then complete it...morning 30-3-2017
$conn = mysqli_connect($servername,$username,$password,$dbname);



if(isset($_POST["submit"])){
	
	$email = trim($_POST["email"]);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$password = trim($_POST["password"]);
	$password = strip_tags($password);
	$password = htmlspecialchars($password);
	
	$query = "SELECT *FROM `member_login` WHERE email='$email' AND password='$password'";
	$result= mysqli_query($conn,$query);
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	#$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        # session_register("myusername");
         #$_SESSION['login_user'] = $myusername;
       # echo "succesfully login";
	   session_start();
	   $_SESSION['member_email']= $email;
	   
	   
         header("location: profile.php");
      }else {
         #$error = 
		 echo "Incorrect Login Details";
      }
   }
   
#	$result = mysqli_query($conn,$query);
	
	
#	if($result){
#		echo '<script language="javascript">';
#		echo 'alert("Successfully login")';
#			echo '</script>';
#	}
#	else
#	{
#		echo '<script language="javascript">';
#		echo 'alert("Incorrect combination")';
#			echo '</script>';
		
#	}
#}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Member Login</title>
  <style>
  #img{
	  
	  align:left;
	  
  }
  </style>
</head>
<?php
include("../common_client/master.php");


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
      
				  <li><a href="member_profiles.php">Member Profiles</a></li>
                      <li class="active"><a href="login.php">Login</a></li>
						
                        <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
						<li><a href="profile.php">Your Profile</a></li>
                  </ul>				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
				
			</nav>
			<!-- menubar area end -->
			
			<br />
			
		</div>
			<!--
<div class="container">
                 <div class="row">
                      
                    </div>       
					
			</div>
			-->
<div class="container">
<div class="row">
<div class="col-md-4">
<div  class="pull-left" >
  

  <img  src="login.png" height="250px" width="250px" />
  
  
  </div>
  </div>

  <div class="col-md-6" >
  <form  method="POST" name="login">

                            <h3><strong>Members</strong>  Login</h3>
                            <small class="text-muted"><strong>This section is for Islamabad Diamond Cricket Club Members Only.</strong><br />
               Please enter email ID and Password to procced.</small>

	<div class="form-group">
	
      <label>Member ID:</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="submit" id="sub">Submit</button>
	<button type="reset" class="btn btn-default" id="res">Reset</button>
  </form>
  <a href="membershipform.php">New User Registration?</a>
  </div>

  
  
	</div>
  
  </div>
</div>
            


	<br />
<footer class="container-fluid text-center" style="padding:1rem; position: fixed;
  right: 0;
  bottom: 0;
  left: 0;">
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>

</body>
</html>