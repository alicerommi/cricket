<?php
$servername= "localhost";
$username= "root";
$password ="";
$dbname = "administrator_db";
  
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die ("Error ".mysqli_connect_error());
}


 #session_start();
  
   if(isset($_POST['username']))
    {

   	$name = $_POST['username'];
   	$name = strip_tags($username);
   	$name = htmlspecialchars($username);
   	$name = trim($username); 

   }
    if(isset($_POST['password'])){

    $password = $_POST['password'];
   	$password = strip_tags($password);
   	$password= htmlspecialchars($password);
   	$password = trim($password); 
   	
    }  
  
    $errSubmit="";
   if($_POST){
      $sql = "SELECT* FROM users WHERE name = '$username' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
     # $count = mysqli_num_rows($result);
     # $count = mysqli_num_rows($result);
      
      if($result ) {
        
        echo '<script language="javascript">' ;
	 echo 'alert("Successfully login")';
		 echo '</script>';
		# header("Location:index.php");
         #header("location: index.html");
      }
      else {

        $errSubmit = "Wrong Username and Password Combination!";
			#echo '<script language="javascript">' ;
		 #echo 'alert("User name and password is incorrect")';
		 #echo '</script>';

      }
   
  }
   #session_destroy();
   mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      

        <link rel="shortcut icon" href="../assets_admin/images/favicon_1.ico">

        <title>Admin Panel</title>

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
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Diamond Cricket Club</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20"  method="POST" action="">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg w-lg waves-effect waves-light" name="submit btn" type="submit">Log In</button>
                        <?php echo "<p class='text-danger'>$errSubmit</p>";?>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="recoverpw.php"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="register.php">Create an account</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    	
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