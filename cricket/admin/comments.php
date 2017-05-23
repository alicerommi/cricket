<?php
include("../common/db.php");
include("../common/admin_header.php");

?>



  <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container">
            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                <h2 class="pull-left page-title">Users Comments</h2>
                <ol class="breadcrumb pull-right">
                  <li>
                    <a href="index.php">Diamond</a>
                  </li>
                  
                    <li class="active"><a href="comments.php">Users Comments</li></a>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
			<?php
		$query = "SELECT id,name,email,message FROM `contact`";
		
		$result = mysqli_query($conn,$query);

		if(mysqli_num_rows($result)>0){
			while($rows = mysqli_fetch_array($result)){
				
	?>
	<div class="col-lg-3">
	<div class = "panel panel-border panel-success">
	
	<div class= "panel-heading"> <?php echo "Name: ".$rows["name"]  ."<br>" ;?></div>
	<div class= "panel-body">
	<?php
	
	$userid = $rows["id"];
	echo "id: ". $userid. "<br>";
	echo "Email: ".$rows["email"]. "<br>";
	echo "Message: ".$rows["message"]. "<br>";
	?>
</div>
</div></div>
	<?php			
			}
			
		}	

if(!$result){
	echo "failed to show the Comments";
	
}		
	mysqli_close($conn)?>									
						
            <br />

          </div>
        </div>
        <?php include("../common/admin_footer.php");?>

