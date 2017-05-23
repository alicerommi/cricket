<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "administrator_db";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	#session_start();
	if(isset($_POST['register-btn'])){
	
	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password1']);
	$confirm_password = mysql_real_escape_string($_POST['password2']);
	
	
if(preg_match('/^([a-zA-Z]+[\'-]?[a-zA-Z]+[ ]?)+$/', $username)){
	 if($password == $confirm_password){
		//create user
		if(isset($username)){
		$query = "SELECT* FROM users WHERE username='$username' AND email='$email'";
		$mysql_get_users = mysqli_query($conn,$query);
		$get_rows = mysqli_affected_rows($conn);
		if($get_rows>=1){
			echo "administrator with same name is already exists";
			die();
		}else{
		$sql = "INSERT INTO `users`(email,username,password) VALUES('$email','$username','$password')";
		$result = mysqli_query($conn,$sql);
		if($result){	 
		 echo '<script language="javascript">';
		echo 'alert("Succesfully registered")';
		echo '</script>';
		header("location:login.php");
		
		
		}else{
			 echo '<script language="javascript">';
		echo 'alert("failed")';
		echo '</script>';
			
		}
		}
	 }
	 }
	 else{
		 echo '<script language="javascript">';
		echo 'alert("Passwords are not matched")';
		
		echo '</script>';
	 }
		}else{
		echo '<script language="javascript">';
		echo 'alert("Enter a Valid User name")';
		echo '</script>';
	}
	}
	mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Registration</title>

        <!-- Base Css Files -->
        <link href="../assets_admin/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="../assets_admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets_admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="../assets_admin/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="../assets_admin/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="../assets_admin/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="../assets_admin/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="../assets_admin/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets_admin/js/modernizr.min.js"></script>
		
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20"  method="POST"  role="form" id="registerform">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="email" required="" name ="email" placeholder="Email" />
							
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" required="" name="username" placeholder="Username"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password"   required="" name="password1" id="password1" placeholder="Password"/>
							
                        </div>
                    </div>
					
					<div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password"  required=""  name="password2" id="password2" data-match-error="Passwords does not match"  placeholder="Confirm Password"/>
							
						</div>
                    </div>
					
					  <!-- #messages is where the messages are placed inside -->
				<div class="form-group">
					<div class="col-xs-12">
					<div id="messages"></div>
        </div>
    </div>
					
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox-signup" type="checkbox" checked="" />
                                <label for="checkbox-signup">
                                    I accept <a href="#">Terms and Conditions</a>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                
                    <div class="form-group text-center m-t-40" >
                        <div class="col-xs-12">
                            <button class="btn btn-success waves-effect waves-light btn-lg w-lg" type="submit" name="register-btn">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="login.php">Already have account?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>
 
        
    	<script>
            var resizefunc = [];
        </script>
        <script src="../assets_admin/js/jquery.min.js"></script>
        <script src="../assets_admin/js/bootstrap.min.js"></script>
        <script src="../assets_admin/js/waves.js"></script>
        <script src="../assets_admin/js/wow.min.js"></script>
        <script src="../assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../assets_admin/js/jquery.scrollTo.min.js"></script>
        <script src="../assets_admin/assets/jquery-detectmobile/detect.js"></script>
        <script src="../assets_admin/assets/fastclick/fastclick.js"></script>
        <script src="../assets_admin/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../assets_admin/assets/jquery-blockui/jquery.blockUI.js"></script>
		

        <!-- CUSTOM JS -->
        <script src="../assets_admin/js/jquery.app.js"></script>
		
	</body>
</html>