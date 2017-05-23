<?php
session_start();



include("../common_client/master.php");

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>


 		<script type='text/javascript' src="../assets_client/assets/Calculator files(DL)/js/query.js"> </script>
		<script language=javascript src="../assets_client/assets/Calculator files(DL)/js/numeric.js"></script>
		<script language=javascript src="../assets_client/assets/Calculator file(DL)/common.js"></script>


<script type="text/javascript">onkeyupValidationClass();</script>			
			</div>			    <script type="text/javascript">
				function alert(val)
				{
				    $("#dynErrDisp").show();
				    $("#dynErrDisp").html(val);
				}
			    </script>
			
<script type='text/javascript'>

var values = Array();                         //Duckworth Lewis Table

values[50] = Array(100.0, 93.4, 85.1, 74.9, 62.7, 49.0, 34.9, 22.0, 11.9, 4.7, 0);   
values[49] = Array(99.1, 92.6, 84.5, 74.4, 62.5, 48.9, 34.9, 22.0, 11.9, 4.7, 0);
values[48] = Array(98.1, 91.7, 83.8, 74.0, 62.2, 48.8, 34.9, 22.0, 11.9, 4.7, 0);
values[47] = Array(97.1, 90.9, 83.2, 73.5, 61.9, 48.6, 34.9, 22.0, 11.9, 4.7, 0);
values[46] = Array(96.1, 90.0, 82.5, 73.0, 61.6, 48.5, 34.8, 22.0, 11.9, 4.7, 0);
values[45] = Array(95.0, 89.1, 81.8, 72.5, 61.3, 48.4, 34.8, 22.0, 11.9, 4.7, 0);
values[44] = Array(93.9, 88.2, 81.0, 72.0, 61.0, 48.3, 34.8, 22.0, 11.9, 4.7, 0);
values[43] = Array(92.8, 87.3, 80.3, 71.4, 60.7, 48.1, 34.7, 22.0, 11.9, 4.7, 0);
values[42] = Array(91.7, 86.3, 79.5, 70.9, 60.3, 47.9, 34.7, 22.0, 11.9, 4.7, 0);
values[41] = Array(90.5, 85.3, 78.7, 70.3, 59.9, 47.8, 34.6, 22.0, 11.9, 4.7, 0);
values[40] = Array(89.3, 84.2, 77.8, 69.6, 59.5, 47.6, 34.6, 22.0, 11.9, 4.7, 0);
values[39] = Array(88.0, 83.1, 76.9, 69.0, 59.1, 47.4, 34.5, 22.0, 11.9, 4.7, 0);
values[38] = Array(86.7, 82.0, 76.0, 68.3, 58.7, 47.1, 34.5, 21.9, 11.9, 4.7, 0);
values[37] = Array(85.4, 80.9, 75.0, 67.6, 58.2, 46.9, 34.4, 21.9, 11.9, 4.7, 0);
values[36] = Array(84.1, 79.7, 74.1, 66.8, 57.7, 46.6, 34.3, 21.9, 11.9, 4.7, 0);
values[35] = Array(82.7, 78.5, 73.0, 66.0, 57.2, 46.4, 34.2, 21.9, 11.9, 4.7, 0);
values[34] = Array(81.3, 77.2, 72.0, 65.2, 56.6, 46.1, 34.1, 21.9, 11.9, 4.7, 0);
values[33] = Array(79.8, 75.9, 70.9, 64.4, 56.0, 45.8, 34.0, 21.9, 11.9, 4.7, 0);
values[32] = Array(78.3, 74.6, 69.7, 63.5, 55.4, 45.4, 33.9, 21.9, 11.9, 4.7, 0);
values[31] = Array(76.7, 73.2, 68.6, 62.5, 54.8, 45.1, 33.7, 21.9, 11.9, 4.7, 0);
values[30] = Array(75.1, 71.8, 67.3, 61.6, 54.1, 44.7, 33.6, 21.8, 11.9, 4.7, 0);
values[29] = Array(73.5, 70.3, 66.1, 60.5, 53.4, 44.2, 33.4, 21.8, 11.9, 4.7, 0);
values[28] = Array(71.8, 68.8, 64.8, 59.5, 52.6, 43.8, 33.2, 21.8, 11.9, 4.7, 0);
values[27] = Array(70.1, 67.2, 63.4, 58.4, 51.8, 43.3, 33.0, 21.7, 11.9, 4.7, 0);
values[26] = Array(68.3, 65.6, 62.0, 57.2, 50.9, 42.8, 32.8, 21.7, 11.9, 4.7, 0);
values[25] = Array(66.5, 63.9, 60.5, 56.0, 50.0, 42.2, 32.6, 21.6, 11.9, 4.7, 0);
values[24] = Array(64.6, 62.2, 59.0, 54.7, 49.0, 41.6, 32.3, 21.6, 11.9, 4.7, 0);
values[23] = Array(62.7, 60.4, 57.4, 53.4, 48.0, 40.9, 32.0, 21.5, 11.9, 4.7, 0);
values[22] = Array(60.7, 58.6, 55.8, 52.0, 47.0, 40.2, 31.6, 21.4, 11.9, 4.7, 0);
values[21] = Array(58.7, 56.7, 54.1, 50.6, 45.8, 39.4, 31.2, 21.3, 11.9, 4.7, 0);
values[20] = Array(56.6, 54.8, 52.4, 49.1, 44.6, 38.6, 30.8, 21.2, 11.9, 4.7, 0);
values[19] = Array(54.4, 52.8, 50.5, 47.5, 43.4, 37.7, 30.3, 21.1, 11.9, 4.7, 0);
values[18] = Array(52.2, 50.7, 48.6, 45.9, 42.0, 36.8, 29.8, 20.9, 11.9, 4.7, 0);
values[17] = Array(49.9, 48.5, 46.7, 44.1, 40.6, 35.8, 29.2, 20.7, 11.9, 4.7, 0);
values[16] = Array(47.6, 46.3, 44.7, 42.3, 39.1, 34.7, 28.5, 20.5, 11.8, 4.7, 0);
values[15] = Array(45.2, 44.1, 42.6, 40.5, 37.6, 33.5, 27.8, 20.2, 11.8, 4.7, 0);
values[14] = Array(42.7, 41.7, 40.4, 38.5, 35.9, 32.2, 27.0, 19.9, 11.8, 4.7, 0);
values[13] = Array(40.2, 39.3, 38.1, 36.5, 34.2, 30.8, 26.1, 19.5, 11.7, 4.7, 0);
values[12] = Array(37.6, 36.8, 35.8, 34.3, 32.3, 29.4, 25.1, 19.0, 11.6, 4.7, 0);
values[11] = Array(34.9, 34.2, 33.4, 32.1, 30.4, 27.8, 24.0, 18.5, 11.5, 4.7, 0);
values[10] = Array(32.1, 31.6, 30.8, 29.8, 28.3, 26.1, 22.8, 17.9, 11.4, 4.7, 0);
values[9]  = Array(29.3, 28.9, 28.2, 27.4, 26.1, 24.2, 21.4, 17.1, 11.2, 4.7, 0);
values[8]  = Array(26.4, 26.0, 25.5, 24.8, 23.8, 22.3, 19.9, 16.2, 10.9, 4.7, 0);
values[7]  = Array(23.4, 23.1, 22.7, 22.2, 21.4, 20.1, 18.2, 15.2, 10.5, 4.7, 0);
values[6]  = Array(20.3, 20.1, 19.8, 19.4, 18.8, 17.8, 16.4, 13.9, 10.1, 4.6, 0);
values[5]  = Array(17.2, 17.0, 16.8, 16.5, 16.1, 15.4, 14.3, 12.5, 9.4, 4.6, 0);
values[4]  = Array(13.9, 13.8, 13.7, 13.5, 13.2, 12.7, 12.0, 10.7, 8.4, 4.5, 0);
values[3]  = Array(10.6, 10.5, 10.4, 10.3, 10.2, 9.9, 9.5, 8.7, 7.2, 4.2, 0);
values[2]  = Array(7.2, 7.1, 7.1, 7.0, 7.0, 6.8, 6.6, 6.2, 5.5, 3.7, 0);
values[1]  = Array(3.6, 3.6, 3.6, 3.6, 3.6, 3.5, 3.5, 3.4, 3.2, 2.5, 0);
values[0]  = Array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

var original_values = Array();
for (i=0; i<=50; i++)
{
  original_values[i] = Array();
  for (j=0; j<=10; j++)
  {
    original_values[i][j] = values[i][j];
  }
}

total_overs=50;

var bowling_points = Array();

function calc()
{
 var run_a = document.first.run_a.value;
 var wkt_a = document.first.wkt_a.value;
 var run_b = document.first.run_b.value;
 var wkt_b = document.first.wkt_b.value;
 var overs = document.first.over_b.value;
 var max_over = document.first.max_over.value;
 
 if(run_a=='' || wkt_a=='' || run_b=='' || wkt_b=='' || overs=='' || max_over=='')
 {
    alert('Enter all fields correctly');
    return 0;
 }
 
  bowling_points[1]  = 5;                                  //Points calculation array
  bowling_points[2]  = 4;
  bowling_points[3]  = 3;
  bowling_points[4]  = 2;
  bowling_points[5]  = 2;
  bowling_points[6]  = 1;
  bowling_points[7]  = 1;
  bowling_points[8]  = 0;
  bowling_points[9]  = 0;
  bowling_points[10] = 0;

  run_a = Math.floor(run_a);
  document.first.run_a.value = run_a;
  
  wkt_a = Math.floor(wkt_a);
  document.first.wkt_a.value = wkt_a;
  
  max_over = Math.floor(max_over);
  if (max_over > 50) 
    {
      max_over = 50;
    }
  if (max_over < 10 | max_over == '') 
    {
      max_over = 10;
    }
  document.first.max_over.value = max_over;
  
  if (max_over != total_overs) 
    {
      update_values(max_over);                           // function call update table values
    }

  if (wkt_b > 10) 
    {
      wkt_b = 10;
    }
  if (wkt_b <= 0 | wkt_b == '') 
    {
      wkt_b = 0;
    }
  document.first.wkt_b.value = wkt_b;
 
  if (overs > max_over) 
    {
      overs = max_over;
    }
  if (overs < 0 | overs == '') 
    {
      overs = 0;
    }
  document.first.over_b.value = overs;

  overs_b = Math.floor(overs);
  balls_b = Math.floor((overs-overs_b)*10+.5);
  if (balls_b > 5) 
  {
    balls_b -= 6; 
    overs_b ++;
  }
  overs = overs_b + '.'+balls_b;
  document.first.over_b.value = overs;

  target_b = Math.floor(runs_needed(overs_b, balls_b, wkt_b, run_a));        // fuction call runs needed to win

  if (target_b < run_b) 
  {
    margin = run_b - target_b; 
    result_str = 'Team B Wins by '+margin+' runs'; 
    res = 'B';
  }
  if (target_b > run_b) 
  {
    margin = target_b - run_b; 
    result_str = 'Team A Wins by '+margin+' runs'; 
    res = 'A';
  }
  if (target_b == run_b) 
  {
    result_str = 'The Match is a TIE'; 
    res = 'T';
  }

  document.first.op1.value = result_str;

  points_a = 0;
  points_b = 0;

  if (res == 'A')
  {
    points_a = 10;

    percentage_of_score = run_b / target_b;                       // percentage of winning target

    if (percentage_of_score >= 0.5) {points_b = 1;}               
    if (percentage_of_score >= 0.6) {points_b = 2;}
    if (percentage_of_score >= 0.7) {points_b = 3;}
    if (percentage_of_score >= 0.8) {points_b = 4;}
    if (percentage_of_score >= 0.9) {points_b = 5;}

    percentage_of_score = Math.floor(percentage_of_score * 100);
    points_b += ' ( '+percentage_of_score+'% of winning target )';
  }

  if (res == 'B')
  {
    points_b = 10;
    wkts_needed = 11;

    for (i=0; i<=10; i++)
    {
      new_target = Math.floor(runs_needed(overs_b, balls_b, i, run_a));
      if (new_target >= run_b) {wkts_needed = i; i=11;}
    }

    wkts_to_take = wkts_needed - wkt_b;
    points_a = bowling_points[wkts_to_take];                                 //function call points calculation

    points_a += ' ( Wkts needed to win = '+wkts_needed+' )';
  }

  if (res == 'T')
  {
    points_a = 7;
    points_b = 7;
  }

  document.first.op2.value = points_a;
  document.first.op3.value = points_b;
}

function update_values(max_over)                              // update the array values
{
  for (i=0; i<=max_over; i++)
  {
    k = i/max_over*50;
    l = Math.floor(k);
    m = k-l;

    for (j=0; j<=10; j++)
    {
      o = original_values[l][j];
      if (l<max_over) 
      {
        p = original_values[l+1][j];
      }
      else 
      {
        p = original_values[l][j];
      }
      values[i][j] = (1-m)*o+m*p;
    }
  }
 total_overs = max_over;
}

function runs_needed(overs, balls, wickets, target)                  //calculate runs needed to win
{
  if (overs >= total_overs) {return target;}

  x1 = target-target * values[total_overs-overs][wickets]/100;
  if (balls == 0) {return x1;}

  x2 = target-target * values[total_overs-overs-1][wickets]/100;
  x3 = x1 + (x2-x1)* balls/6;

  return (x3);
}

</script>

</head>

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
						<li class ="active"><a href="calculator.php">Use DL Calculator</a></li>
					  </ul>
					</li>
      
				  <li><a href="member_profiles.php">Member Profiles</a></li>
                      <li><a href="login.php">Login</a></li>
                  
                        <li><a href="about.php">About Us</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					  <li><a href="profile.php">Your Profile</li>
                    
                  </ul>				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!-- menubar area end -->
			
			<br />
			
		</div>
		<link href="../assets_client/assets/Calculator files(DL)/css/style.css" rel="stylesheet" type="text/css">
			<link href="../assets_client/assets/Calculator files(DL)/css/embedded.css" rel="stylesheet" type="text/css">
			<div class="ec_calculator_gen clearfix" style="position:relative; margin:0px !important;">
			    
			    <form name=first><div id="dispCalcConts">
				
		<div class='group clearfix'>
                
                  <div class='group_con_40'>
		  <label>Team A Scored </label>
                  <input name=run_a type=text  class='easynumeric'>
                  </div>
                  
      <div class='group_con_40'>
      <label>For Wickets</label>
      <input name=wkt_a type=text  class='easynumeric'>
      </div>
      
    </div>
    
    <div class='group clearfix'>
    <div class='group_con_40'>
       <label>Team B Scored </label>
       <input name=run_b type=text  class='easynumeric'>
    </div>
       <div class='group_con_40'>
      <label>For Wickets</label>
      <input name=wkt_b type=text  class='easynumeric'>
      </div>
    </div>
      
    <div class='group clearfix'>
    <div class='group_con_40'>
    <label>Overs Faced </label>
    <input name=over_b type=text  class='easynumeric'>
    </div>
    
     <div class='group_con_40'>
     <label>Maximum   Overs </label>
     <input name=max_over type=text  class='easynumeric'>
     </div>
     </div>
     
     <div class='group clearfix'>
     <input type=button name=re value=Calculate onclick=calc()>
     <input type='reset' value='Reset'>
     </div>
     
     <div class='result clearfix'>
        <div class='group clearfix'>
        <label>Result </label>
        <input name=op1 type=text readonly >
        </div>
        
	<div class='group clearfix'>
        <label>Team A Points </label>
        <input name=op2 size=25 type=text readonly >
        </div>
        
	<div class='group clearfix'>
        <label>Team B Points </label>
        <input name=op3 size=25 type=text readonly >
        </div>
    </div></div> </form>
        
	<br />
	
	
<footer class="container-fluid text-center"  style="background-color: rgb(135, 0, 0); padding:1rem; position: absolute; right: 0;
  bottom: 0;
  left: 0;
      color: white;">
  <p> Diamond Cricket Club, Islambad, G-8/2, Pakistan </p>

</footer>

</body>
</html>