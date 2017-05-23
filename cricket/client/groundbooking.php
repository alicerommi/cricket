<?php
session_start();


include("../common_client/db.php");

$errBooked ="";

#$flag=false;

$Isavaliable;

if(isset($_POST['search']))
{

$time = $_POST['timing'];

if(isset($_POST['date'])){

$date = $_POST['date'];

}

$sql ="SELECT* FROM `groundbooking` WHERE time='$time' AND date='$date'";       

$res = mysqli_query($conn,$sql);

$count= mysqli_num_rows($res);

if($count!=0)
{

$errBooked="Already Booked at this time slot";
 
$Isavaliable=0;

exit(0);

}
 else
	{	
		$errBooked="Slot is avaliable";
		
		$Isavaliable=1;
	}
	
	#$flag=true;
	 # for saving the date and time while searching
	 		#if($res){
			
			 
		#		}
		
	#	else
	#		{
	#		$errBooked = "error in saving".mysqli_error();
	#		}
			
			
	

}
else{

       $errBooked="*Pick the Time and Date";
	   
}

if(isset($_POST['submit2'])){
	
	$time2 = $_POST['time1'];
	
	
	$date2 = $_POST['date1'];
		
if($time2==""&&$date2==""){
	
		echo '<script>';
		echo 'alert("Please Select The Time and Date")';
		echo '</script>';
				
}else{
		
	$username = $_POST['username'];
	
	$email = $_POST['email'];
	
	
	$city = $_POST['city'];
	

	$mobile_no = $_POST['mobile_number'];
	

	$count = "COUNT(*) `email` FROM `groundbooking` where email='$email' ";

	
	$compare = mysqli_query($conn,$count);
	
	
	if(!$compare){
	
	$query = "INSERT INTO groundbooking(time,date,name,email,city,mobile_no) VALUES('$time2','$date2','$username','$email','$city','$mobile_no')";
	
	$result = mysqli_query($conn,$query);
	
	#$row = mysqli_fetch_array($result);
	
	#$count = mysqli_num_rows($result);

	if($result){
		
		echo '<script>';
		echo 'alert("Sucessfully Submitted")';
		echo '</script>';
				}

		}
	else{
		
		echo '<script>';
		echo 'alert("user with this email is already exists")';
		echo '</script>';
		
	}

	}
}


?>




<html xmlns="http://www.w3.org/1999/xhtml">

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

	

<title></title>




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
						<li class="active"><a href="groundbooking.php">Ground Booking</a></li>
						<li><a href="membershipform.php">MemberShip Form</a></li>
						<li><a href="calculator.php">Use DL Calculator</a></li>
					  </ul>
					</li>
      
				  <li><a href="member_profiles.php">Member Profiles</a></li>
                      <li><a href="login.php">Login</a></li>
                  
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
			</div>
	
	
<div class="container">

<div class="row">

<div class="col-md-3">

<p class="h3" style="">Book the Ground</p>

<form name="checkform" method="POST" action="">

<div class="form-group">

  <label for="sel1">Select Time:</label>

  <select class="form-control" id="sel1" name="timing">

  <option value="" selected disabled>Time is not selected</option>

  <option value="9AM-12PM">9AM-12PM</option>

  <option  value="1PM-3PM">1PM-3PM</option>

  <option  value="3PM-6PM">3PM-6PM</option>
    
  </select>

  </div>
  
       <div class="input-group"> 
		  
		  <label for="date">Select Date:</label>
        
		<input class="form-control" id="txtDate" name="date" placeholder="MM/DD/YYYY" type="Date" required/>
       
	   </div>
	
          <div class="form-group">
            
			<br />
			
			<?php echo "<p class='text-danger'> $errBooked </p>";?>
		   <Button name="search"  class="btn btn-primary"/> Search </button>
		   
		   <button type="reset" name="reset" class="btn btn-primary"> Reset </button>
      
	  </div>


</div>
</form>
		<?php 
#		if(!$flag){
#			echo '
#			<link href="assets/groundbooking/css/disable.php" rel="stylesheet" type="text/css" />';
#			
#		}
			
		?>

        <div class=" col-md-8" id="my-div" name="my-div"> 
		
            <p class="h3">Fill the Ground Booking Form</p>   
        
		<form name="groundbooking" method="POST" >

	
	<article class="form-group">
		<label for=" selected time">Seleted Time:</label>
	<!-- if it works then hidden -->
	<input type ="text" class="form-control" name="time1" id="time1" pattern="[a-zA-Z][a-zA-Z ]*" placeholder="Chosen Time "  required readonly
		
		 required  value=<?php if(isset($_POST['search'])){
			if($Isavaliable==1){
				echo $time;
			}else{
				
				
			}
			
			
		 } ?>
		  >
		 
		 </article>

	
		<article class="form-group">
	
		<label for="selected date">Selected Date:</label>
		
		<input type ="text" class="form-control" name="date1" id="date1"  placeholder="Chosen Date"  required readonly
		
				
		
		 value=<?php if(isset($_POST['search'])){
			
			
				echo $_POST['date'] ;
		
			
		 } ?>		
			>
		
		
		</article>
		<script>
		
		function validationEvent(){
var time = document.getElementById("time1").value;
var date = document.getElementById("date1").value;
if(time==' ' && date==' '){
alert("Select the time and date");
}

}
		
		
		
		
		</script>
		
		
		
		<article class="form-group">
		
		<label for="Name">Name:</label>
		
		<input type ="text" class="form-control" name="username" id="username" pattern="[a-zA-Z][a-zA-Z ]*" placeholder="Enter Your Full Name" required >
		
		</article>
		
		<div class="form-group">
		<label for ="email">Email:</label>
		<input type="email" class="form-control" name="email" placeholder="Enter Your Full Email" required >
			
		</div>
		
		
		<div class="form-group">

		<label for="choose city">Select City:</label>
		 
		<select name="city" class="form-control">

		<option value=""  selected disabled > Select One--</option>

		<option value="Islamabad">Islamabad</option>

		<option value="Rawalpindi">Rawalpindi</option>
	
		</select>

		</div>
		
		<!-- using HTML5 Code here-->
		<article class="form-group">
		
		<label for ="mobile_no">Mobile No(03XX-XXXXXXX): </label><br />
		
		<input type="text" pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" name="mobile_number" placeholder="Mobile Number" class="form-control"
		
		title="Follow the above mentioned Format" maxlength="12" required />
		
		</article>
		
		<!-- diabled
		<div class="form-group">
		<label for="mobile_No">Mobile No:</label>
		<input type="text" class="form-control" name="mobile_no" id ="phone_no"  pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" placeholder="Enter Your Mobile Number" required>
		
		</div>
		-->
		
		<div class="form-group">
		
		<Button type="submit" class="btn btn-primary" id="register" name="submit2"  >
		Submit
		</Button>
		
		<Button type="reset" class="btn btn-primary" name="reset" >Reset
		
		</Button>
		
	     
       
	
		
		</div>
			
		
		
		
		
	</form>	
</div>
</div>
		
		
		
	</form>
</div>


</div>








<!-- script for the username box-->
<script>
$("#username").on("keypress", function(event) {

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

$('#username').on("paste",function(e)
{
    e.preventDefault();
});
</script>



<!-- for the date -->
<script>

var dateControler = {
        		    currentDate : null
        		}

        		 $(document).on( "change", "#txtDate",function( event, ui ) {
        		        var now = new Date();
        		        var selectedDate = new Date($(this).val());
        		        
						
        		        if(selectedDate < now ) {
        		            $(this).val(dateControler.currentDate);
        		        } else  {
								
								dateControler.currentDate = $(this).val();
						}
        		    });   
</script>
<!--validation on contact number -->


<script>
function phonenumber(inputtxt)  
{  
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
  if((inputtxt.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Enter Valid Number");  
        return false;  
        }  
}  
</script>


	<br />
<footer class="container-fluid text-center" style="padding:1rem;" >
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>

</body>
</html>