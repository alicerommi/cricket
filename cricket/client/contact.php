<?php
session_start();



include("../common_client/db.php");

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	
	die("Error ".mysqli_connect_error());
}
if($_POST){
if(isset($_POST["submit-btn"])){

$name = $_POST["name"];
$name = strip_tags($name);
$name = htmlspecialchars($name);
$name=  trim($name);	
	
	if(!preg_match('/^([a-zA-Z]+[\'-]?[a-zA-Z]+[ ]?)+$/', $name)){
		echo '<script language = "javascript">';
		echo 'alert("Invalid User name")';
		echo '</script>';
		
	}
	
$email =$_POST["email"];
$email = strip_tags($email);
$email = htmlspecialchars($email);	
$email = trim($email);

$message = $_POST["message"];
$message = strip_tags($message);
$message = trim($message);

$query = "INSERT INTO `contact`(name,email,message) VALUES('$name','$email','$message')";

$result = mysqli_query($conn,$query);

if(!$result){
	
	echo '<script language="javascript">';
	echo 'alert("failed")';
	echo '</script>';
}else{
	echo '<script language="javascript">';
	echo 'alert("YOur Message is successfully Send")';
	echo '</script>';
	
}

	
}else{
	
	echo '<script language="javascript">';
	echo 'alert("Error in Sending")';
	echo '</script>';
}
}
mysqli_close($conn);
?>


<html>
<head>
<title>Diamond Cricket Club</title>

	<link rel="stylesheet" href="../assets_client/assets/contact/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets_client/assets/contact/css/color.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
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
                      <li><a href="Login.php">Login</a></li>
                 
                        <li><a href="about.php">About Us</a></li>
					  <li  class = "active"><a href="contact.php">Contact Us</a></li>
                    <li><a href="profile.php">Your Profile</a></li>
                  </ul>				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			
			
<div class="container">
		<h3>Contact us</h3>	
		
		
<main class="row">


<main id="left" class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
    <article class="col-xs-12 widget">
<p style="display: none;"></p>


<form class="form"  method="POST">


    <div class="form-group required">
        <label for="name" >Name<span style="color: red; font-weight: 700">&ast;</span></label>
        <input id="name" type="text" class="form-control" value="" name="name" placeholder="Enter Your Name" required />
    </div>
    <div class="form-group required">


 <label for="email" >Email<span style="color: red; font-weight: 700">&ast;</span></label>
        <input id="email" class="form-control glyphicons glyphicons-message-flag" type="email" value="" name="email" placeholder="Enter Your Email" required />
    
	</div>
	
      

    <div class="form-group required">
        <label for="message">Message<span style="color: red; font-weight: 700">&ast;</span></label>
        <textarea name="message" class="form-control" id="message" rows="8"  placeholder="Enter Your Message(Only English letters are allowed)" required></textarea>
    </div>
	
           <input type="submit" name="submit-btn" value="Send" ></input>
        
    
	<p style="padding: 20px 0 0 0"><span style="color: red; font-weight: 700">&ast;</span> indicates a mandatory field.</p>
</form>    
</article>
</aside>
</main>


<aside id="right" class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
  
<div class="richtext">

<iframe  width="512px" height="300px" frameborder="0" scrolling="no" 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.373408541877!2d73.03944591481593!3d33.69928538070351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfb55bc34881%3A0xffd637074ca36071!2sDiamond+Cricket+Ground!5e0!3m2!1sen!2s!4v1488959594224" 
 style="border:0" ></iframe>

<p class="muted"> Diamond Cricket Club
<br /> <strong>Telephone:</strong> 65 6338 9271
<br /> 
<strong>Phone Number:</strong>0321 5249553
<br />
<strong>Address:</strong>Ibn-e-Sina Rd, Islamabad
</p>        
	
	
   <strong><p class="h4">Follow Us On:</p></strong> 
   
			<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center" style="margin-left:1em">
				<div class="icon-circle">
					<a href="https://www.facebook.com/diamond1997/" class="ifacebook" title="Facebook"><i class="fa fa-facebook" ></i></a>
				</div>
			</div>
     
			<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center" style="margin-left:5em">
				<div class="icon-circle">
					<a href="https://twitter.com/diamondcricket" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
			
			<div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center"  style="margin-left:5em">
				<div class="icon-circle">
					<a href="https://plus.google.com/117563864249883561005" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
				</div>
		</aside>
	</div>
 
</div>
	
	
	


  

 
  

</div>



<!-- script for the message box-->
<script>
$("#message").on("keypress", function(event) {

    // Disallow anything not matching the regex pattern (A to Z uppercase, a to z lowercase and white space)
    // For more on JavaScript Regular Expressions, look here: https://developer.mozilla.org/en-US/docs/JavaScript/Guide/Regular_Expressions
    var englishAlphabetAndWhiteSpace = /[A-Za-z ]/g;
   
    // Retrieving the key from the char code passed in event.which
    // For more info on even.which, look here: http://stackoverflow.com/q/3050984/114029
    var key = String.fromCharCode(event.which);
    
    //alert(event.keyCode);
    
    // For the keyCodes, look here: http://stackoverflow.com/a/3781360/114029
    // keyCode == 8  is backspace
    // keyCode == 37 is left arrow
    // keyCode == 39 is right arrow
    // englishAlphabetAndWhiteSpace.test(key) does the matching, that is, test the key just typed against the regex pattern
    if (event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabetAndWhiteSpace.test(key)) {
        return true;
    }

    // If we got this far, just return false because a disallowed key was typed.
    return false;
});

$('#message').on("paste",function(e)
{
    e.preventDefault();
});
</script>

<footer class="container-fluid text-center"  style="padding:1rem;">
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>
</body>
</html>