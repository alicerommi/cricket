<?php
include("../common_client/db.php");
session_start();
$member_email=$_SESSION['member_email'];
if(! $member_email){
        header('Location:login.php');
}

#echo $member_email;
#die;
?>
<html>
<title>user profile</title>
<head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<?php
  include("../common_client/master.php");
  #include("../common_client/profileheader.php");
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
      
				  <!--<li class="active"><a href="profile.php">Member Profiles</a></li>
                      -->
					    <li ><a href="member_profiles.php">Member Profiles</a></li>
                       <!--<li><a href="login.php">Login</a></li> -->
					   <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					
					<li class="active" class="pull-right"><a href="profile.php">Your Profile </a></li>	
					
				  </ul>				 
				</div><!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!-- menubar area end -->
                <div class="container">
   <?php
$query = "SELECT *FROM membership WHERE email='$member_email' AND status='active'";

$result = mysqli_query($conn,$query);



if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){
		$showimage=$row['image'];
												?>                
										<div class="row">
					<div class="panel panel-primary">
					<div class="panel-heading">Personal Information
					
					
                            <div class="pull-right">
							<div class="col-lg-3">
							<!--
							<a href="">Settings <img src="images/arrow.png" /></a>
							-->
								
						<a href="profile.php"><img src="<?php echo "http://localhost/dimondcricket/common_client/image/" .$showimage;?>"
									 alt="profile-image"  height="30px" width="50px"/> </a>
									</div>
							<div class="col-lg-6">
							
							
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-success waves-effect waves-light" href="#"> Profile Settings <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="pass_settings.php">Change Password</a></li>
										<!--<li class="divider"></li>
                                       <li><a href="profile.php">Back to Profile</a></li>-->
									   
                                        
                                        <li class="divider"></li>
                                       <li><a href="logout.php">Log Out</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div>
					</div>
					<div class="panel-body">
					
                                     <div class="col-xs-6 col-xs-offset-1>
                                       <div class="panel-body"> 

												
											<div class="profile-info-name">
										<h4 class="text-white">
										<?php echo $row['name']."<br>"; 
												
										?>
											</h4> 
									<img src="<?php echo "http://localhost/dimondcricket/common_client/image/".$showimage;       ?>"
									class="img-thumbnail" alt="profile-image"  height="130px" width="150px"/>
									
										
									
											</div><br/>
												
											
                                                <div class="about-info-p">
                                               
                                                    <strong>Date of Birth</strong>
                                                    <br/>
                                                    <p class="text-muted">
													<?php
													echo $row['date']."<br>";
													
													?>
													
													</p>
                                                
                                                
                                                    <strong>City</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php
													echo $row['city']."<br>";
													
													?>
													</p>
													
													<strong>Playing Role</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php
													echo $row['play_role']."<br>";
													
													?>
													</p>
													
													
													<strong>Batting Style</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php
													echo $row['bat_style']."<br>";
													
													?>
													</p>
													<strong>Bowling Style</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php
													echo $row['bow_style']."<br>";
													
													?>
													</p>
													
													<!--
                                                    <strong>Playing Role</strong>
                                                    <br/>
                                                    <p class="text-muted">Allrounder</p>
                                                
													
                                                    <strong>Bating Style</strong>
                                                    <br/>
                                                    <p class="text-muted">Right hand bat</p>
                                                
												
                                                    <strong>Bowling Style</strong>
                                                    <br/>
                                                    <p class="text-muted">Right handed</p>
													-->
													
													<?php
													}	
}
if(!$result){
	
	echo "fail";
}
				
													?>
                                                </div>
                                          
                                       
                                        <!-- Personal-Information -->

                                     
                                    </div>
									</div>
									
					
					
				<!--	
               <div class="col-md-6" style="padding-top:4em">
                              
    
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
     
        
 <strong> Batting Average
				</strong>
    </thead>
    <tbody>
      <tr>
        <td>Match</td>
        <td>Inns</td>
		<td>NO</td>
        <td>Runs</td>
		<td>Avg.</td>
        <td>H.Score</td>
		<td>100</td>
		<td>50</td>
        
      </tr>
      <tr>
        <td>7</td>
        <td>7</td>
		<td>7</td>
        <td>156</td>
		<td>-</td>
        <td>47</td>
		<td>0</td>
        <td>0</td>
      </tr>
     
    </tbody>
  </table>

  
  <table class="table table-striped table-bordered table-hover table-condensed" style="padding-top:4em;">
    <thead>
     
        <tr>
 <strong> Bowling Average
				</strong></tr>
    </thead>
    <tbody>
      <tr>
        <td>Match</td>
        <td>Over</td>
		<td>Maiden</td>
        <td>Runs</td>
		<td>Wickets</td>
        <td>Avg.</td>
		<td>Economy</td>
        
      </tr>
      <tr>
        <td>7</td>
        <td>25.0</td>
		<td>1</td>
        <td>125</td>
		<td>4</td>
        <td>31.25</td>
		<td>5.00</td>
        
      </tr>
     
    </tbody>
  </table>

</div>


-->
</div>
</span>
</div>
</div>
</div>
 <footer class="container-fluid text-center" style="padding:1rem; position:relative; right: 0; bottom: 0; left: 0;">
    <p>Diamond Cricket Club, Islambad, G-8/2, Pakistan</p>
  </footer>
</body>
</html>