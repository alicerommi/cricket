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
      
				  <li class="active"><a href="profile.php">Member Profiles</a></li>
                      <li><a href="Login.php">Login</a></li>
                        <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
                    
                  </ul>				 
				</div><!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!-- menubar area end -->
                <div class="container">
                    <div class="row">
					
                                     <div class="col-xs-3 col-xs-offset-1">  
									
									   
                                           
                                       <div class="panel-body"> 
											
											<div class="profile-info-name">
										<h4 class="text-white">Shahid Khan Afridi</h4> 
									<img src="1.png" class="img-thumbnail" alt="profile-image">
									 
										
									
											</div><br/>
												
											
                                                <div class="about-info-p">
                                               
                                                    <strong>Date of Birth</strong>
                                                    <br/>
                                                    <p class="text-muted">1/1/1980</p>
                                                
                                                
                                                    <strong>Location</strong>
                                                    <br/>
                                                    <p class="text-muted">Islambad, Pakistan</p>

												
                                                    <strong>Playing Role</strong>
                                                    <br/>
                                                    <p class="text-muted">Allrounder</p>
                                                
													
                                                    <strong>Bating Style</strong>
                                                    <br/>
                                                    <p class="text-muted">Right hand bat</p>
                                                
												
                                                    <strong>Bowling Style</strong>
                                                    <br/>
                                                    <p class="text-muted">Right handed</p>
                                                </div>
                                          
                                       
                                        <!-- Personal-Information -->

                                     
                                    </div>
									</div>
									
					
					
					
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



</div>
</span>
</div>
 <footer class="container-fluid text-center" style="padding:1rem; position: relative; right: 0; bottom: 0; left: 0;">
    <p>Diamond Cricket Club, Islambad, G-8/2, Pakistan</p>
  </footer>
</body>
</html>