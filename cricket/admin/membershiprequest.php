<?php
include("../common/db.php");
include("../common/admin_header.php"); ?>
   
   
 <style>
#my_div{
	backgroud-color:DarkGreen;
	
}

 
</style>
	<div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container">
            <!-- Page-Title -->
            
            <div class="row">
              <div class="col-sm-12">
                <h2 class="pull-left page-title">Membership Requests</h2>
                <ol class="breadcrumb pull-right">
                  <li>
                    <a href="index.php">Diamond</a>
                  </li>
                  
                  <li class="active">Membership Requests</li>
				
                </ol>
              </div>
            </div>

          </div>
        </div>
        
        <div class="container">

            <?php
                             
                    $query = "SELECT *FROM `membership` WHERE status='Pending'";
                    
                    $result = mysqli_query($conn,$query);
                    
                    if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_array($result)){
								?>
						<div class="col-lg-4">		
		<div class="panel panel-border panel-success"  id="my_div">
          <div class="panel-heading" ><?php  echo "Name: " .$row["name"]. "<br>";?></div>
          <div class="panel-body">
								<?php
								$memberid = $row["id"];
								
                            echo "id: ". $memberid. "<br>"; 
							#echo "image:" .$row["image"]."<br>";
							#echo "image" ."<img src='file:///C:/wamp/www/dimondcricket/common_clienst/image/'  .$row["image"].>";
							#echo "<img src='file:///C:/wamp/www/dimondcricket/common_clienst/image/".$row["image"]." '>";
                             #echo "Image:". "<img src='file:///C:/wamp/www/dimondcricket/common_client/image/'" .$row["image"] ">". "<br>";
                          # echo  "<img src='file:///C:/wamp/www/dimondcricket/common_client/image/".$row['image']." '>";
						#	echo "<img src='file:///C:/wamp/www/dimondcricket/common_client/image/".$row["image"]." '>"."<br>";
						
						echo "<img src='http://localhost/dimondcricket/common_client/image/".$row["image"]."  '  height='130' width='130' >"."<br>";
						echo "Email: " .$row["email"]. "<br>";
                            echo "City: " .$row["city"]. "<br>";
                            echo "Contact Number: " .$row["contact_number"]. "<br>";
                            echo "Date of Birth: " .$row["date"]. "<br>";
							echo "Playing Role: " .$row["play_role"]."<br>";
							echo "Playing Role: " .$row["bat_style"]."<br>";
							echo "Playing Role: " .$row["bow_style"]."<br>";
                            echo "Status: " .$row["status"]. "<br>";
						
							echo "<a href=inc/actions.php?action=request&type=accept&memberid=$memberid  class='btn btn-success pull-left' >Accept</a>";
                           
							echo "<a href=inc/actions.php?action=request&type=reject&memberid=$memberid  class='btn btn-success pull-left' style='margin-left:25px;'>Reject</a><br>";
						   #echo "here";   
                            
							?>
							</div>
</div>	</div>			
							<?php
							
							}
                    }
                    
                    if(!$result){
                            echo "fail";            
                                    }
                                    ?>
  
   <?php include("../common/admin_footer.php");?>
