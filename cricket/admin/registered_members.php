<?php
include("../common/db.php");
include("../common/admin_header.php"); ?>
 <style>

 </style>
 <div class="content-page">
        <!-- Start content -->
        
		
		<div class="content">
          <div class="container">
         
            
			
            <!-- Page-Title -->

            <div class="row">
              <div class="col-sm-12">
                <h2 class="pull-left page-title">       
							Registered Members</h2>
 <ol class="breadcrumb pull-right">
                  <li>
                    <a href="index.php">Diamond</a>
                  </li>
                    <li class="active"><a href="registered_members.php">Registered Members</li></a>
                </ol>
                
              </div>
            </div>
          </div>
	</div>
		  <div class="container">
			
			<?php
			
			$query = "SELECT * FROM `membership` WHERE `status`='active'";
			
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result) > 0){
				
				while($rows=mysqli_fetch_array($result))
				{
			?>
			<div class="col-lg-3">
	<div class = "panel panel-border panel-success">
	
	<div class= "panel-heading"> <?php echo "Name: ".$rows["name"]  ."<br>" ;?></div>
	<div class= "panel-body" height="100px">
	<?php
	
	$memberid = $rows["id"];
	echo "Member ID: ". $memberid. "<br>";
	#echo "Email: ".$rows["email"]. "<br>";
		echo "<img src='http://localhost/dimondcricket/common_client/image/".$rows["image"]."  '  height='130' width='130' >"."<br>"."<br>";
		#echo "<a href=inc-member/actions.php?action=view_profile&type=accept&requestid=$memberid  class='btn btn-success pull-left' >View Profile</a>";
#echo "<button class='btn btn-success' name='use_button' value='View Profile' >View Profile </button>";
 echo "<a href ='inc-member/' class = 'btn btn-success' > View Profile </a>"
	#echo "Message: ".$rows["message"]. "<br>";
	
	?>
	</div>
</div></div>		
			<?php
				}
			
			}
				
	if(!$result){
		
			echo "Failed to retrieve members details";
	}		
			
			
			
mysqli_close($conn)		?>	
			
			
			</div>	</div>
               
<?php include("../common/admin_footer.php");?>