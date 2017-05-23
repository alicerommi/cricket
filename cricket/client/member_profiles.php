<?php
session_start();

$member_email=$_SESSION['member_email'];
if(! $member_email){
        header('Location:login.php');
}

include("../common_client/db.php");
?>
<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("diamond_db") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<?php
	if($_GET){
    $query = $_GET['query']; 
    // gets value sent over search form
	$error_query="";
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         $count = array();
        $raw_results = mysql_query("SELECT * FROM membership
            WHERE (`name` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `name`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `name`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
			
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
		$id= $results['id'];
			
		$count[]=$id;
		
		#echo "<p>".$results['name']."</p>";
			
			// posts results gotten from database(name and text) you can also show id ($results['id'])
            
			}
		#	print_r($count);
        }
        else{ // if there is no matching rows do following
            #echo "No results";
			echo '<script>';
		echo 'alert("Match is not found")';
		echo '</script>';
        }
    }
    else{ // if query length is less than minimum
        #echo "Minimum length of query should be ".$min_length;
		#$error_query = "Minimum length of query should be ".$min_length;
		echo '<script>';
		echo 'alert("Minimum length of query must be 3 or more!")';
		echo '</script>';

		}
	}
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
                    <li><a href="profile.php">Your Profile</a></li>
                  </ul>	
				  
				</div><!-- /.navbar-collapse -->
				</div>
<!-- /.container-fluid -->
			</nav>
			<!-- menubar area end -->

<form method="GET" class="form-inline" style="margin-bottom:3em;">

<div class="embed-submit-field">

<div id="search" style="float:right; display:inline-block">

<input type="text" name="query"  id="query" class="form-control"  placeholder="Enter the member name"  value="<?php if($_GET){
	echo $_GET['query']
;	
}?>" maxlength="20" /> 

<input type="submit" name = "searchbyname" value="Search" class="btn btn-primary" />

</div>

</div>

</form>
<script>
$("#query").on("keypress", function(event) {

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

$('#query').on("paste",function(e)
{
    e.preventDefault();
});
</script>


	<div class="container">
	<div class="pull-right">
	<div class="col-md-12">
	
	</div></div></div>
	<div class="container-fluid">
			<div class="row" >				
		<div class="col-md-3" >
	<!--			<p class="h3">Registered Members</p><hr> -->
	<div class="panel panel-default" >
	<div class="panel-heading" > 
	<center><h3 class="panel-title"> Registered Members</h3> </center>
	</div>
				<?php
				
				#echo "Registered Members"."<hr/>";
				#echo count($count); count is buildin function of php used to count the elements of an array!
#die;		
					
				if(!empty($_GET["searchbyname"]))
				{
					$i = count($count);
				
				  #  echo $count[0];
				#while($i>0){
					for($j = 0 ;$j < $i ; $j++){
				#$query="SELECT * FROM `membership` WHERE status='active'"; #$query="SELECT * FROM `membership` WHERE `status`='active'";
				$query="SELECT * FROM `membership` WHERE status='active' AND `id`=$count[$j]";  #final query for searching the member by name
					$results = mysqli_query($conn,$query);	
					#$count= mysql_num_rows($results);

while ($row_users = mysqli_fetch_array($results)) {

	//output a row here
    #echo  "<tr><td>".($row_users['name'])."</td></tr>";	
	 # echo  "<tr><td id='viewprofile-".$row_users['id']."'>".($row_users['name'])."</td></tr>";
	#echo  "<tr><td id='viewprofile' data-id='viewprofile-".$row_users['id']."'>".($row_users['name'])."</td></tr>";
		echo "<a>";
				echo "<table>";
		#	echo $row_users['id'];
		#die;		
				
		$php_var = $row_users['id'];
	echo  "<tr><td class='viewprofile' data-id='".$row_users['id']."' >".($row_users['name'])."
	 </td></tr>";
	 echo "</table>";
echo "</a>";	 
					}	
					
					}//for loop bracket
					#$i--;
					} //if(get)
				
			else{
				
				$query="SELECT * FROM `membership` WHERE status='active'";  #final query for searching the member by name
					$results = mysqli_query($conn,$query);	
					#$count= mysql_num_rows($results);

while ($row_users = mysqli_fetch_array($results)) {

	//output a row here
    #echo  "<tr><td>".($row_users['name'])."</td></tr>";	
	 # echo  "<tr><td id='viewprofile-".$row_users['id']."'>".($row_users['name'])."</td></tr>";
	#echo  "<tr><td id='viewprofile' data-id='viewprofile-".$row_users['id']."'>".($row_users['name'])."</td></tr>";
		echo "<a>";
				echo "<table>";
		#	echo $row_users['id'];
		#die;		
				
		$php_var = $row_users['id'];
	echo  "<tr><td class='viewprofile' data-id='".$row_users['id']."' >".($row_users['name'])."
	 </td></tr>";
	 echo "</table>";
echo "</a>";	 
					}	
			}#} #while loop bracket
		#echo "</a>";			
?>
</div></div>
			
		<style>
		td { cursor: pointer; cursor: hand; }
		</style>	
				
				<div class="col-md-9">
				<div class="panel panel-default">
				<div class="panel-heading">
				<!--<h3><p class="panel-title">Member Information</p></h3> -->
				<center>Member Information</center>
				</div>
				
				<div id="profile_content">
				
				
				
				</div>
				
				</div>
				
			</div></div>		
			</div>
				</div>
			
<footer class="container-fluid text-center" style="padding:1rem; position: absolute;
  right: 0;
  bottom: 0;
  left: 0;">
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>
<script>
$(document).ready(function(){

  $('.viewprofile').click(function(){

  var profileid = $(this).data('id');


       $.ajax({
                type:"GET",
                url:"profile_content.php",
                data:"profileid="+profileid,
                success:function(response){
                $('#profile_content').html(response);
                

            }
            })
    })



   //alert("welcome"+profileid);

	
  //var profileid =79;
  var profileid= "<?php echo $php_var;?>";
       $.ajax({
                type:"GET",
                url:"profile_content.php",
                data:"profileid="+profileid,
                success:function(response){
                $('#profile_content').html(response);
                

            }
            })
  



   //alert("welcome"+profileid);
   
  });
</script>
</body>
</html>