
<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Coderthemes" />
    <link rel="shortcut icon" href="../assets_admin/images/favicon_1.ico" />
    <title>Diamond Cricket Club</title>
    <!-- Base Css Files -->
    <link href="../assets_admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="../assets_admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets_admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="../assets_admin/css/material-design-iconic-font.min.css" rel="stylesheet" />
    <!-- animate css -->
    <link href="../assets_admin/css/animate.css" rel="stylesheet" />
    <!-- Waves-effect -->
    <link href="../assets_admin/css/waves-effect.css" rel="stylesheet" />
    <!-- sweet alerts -->
    <link href="../assets_admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet" />
    <!-- Custom Files -->
    <link href="../assets_admin/css/helper.css" rel="stylesheet" type="text/css" />
    <link href="../assets_admin/css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script src="../assets_admin/js/modernizr.min.js"></script>
  </head>
  <body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
      
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="md md-terrain"></i> <span>Diamond</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                           

                            <ul class="nav navbar-nav navbar-right pull-right">
                               
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                
                              
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
      <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
      <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
           <!-- <div class="user-details">
            <div class="pull-left">
              <img src="../assets_admin/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle" />
            </div>
          <div class="user-info">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="profile.php">Profile
                    <div class="ripple-wrapper"></div></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Settings</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Lock screen</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Logout</a>
                  </li>
                </ul>
              </div>
              <p class="text-muted m-0">Administrator</p>
            </div> 
          </div>
          <!--- Divider -->
          <div id="sidebar-menu">
            <ul>
              <li id="home">
                <a href="index.php">
                  <i class="md md-home"></i>
				  <span>Home</span>
				  
                </a>
              </li>
			  <li id="comment">
			   <a href="comments.php" class="waves-effect">
                  <i class="fa fa-comments" ></i>
				  <span>Users Comments</span>
				  
                </a>
				</li>
              
			  
			     <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-plus"></i><span > Request Container</span><span class="pull-right"></span></a>
                                <ul class="list-unstyled">
								
                                    <li><a href="membershiprequest.php" class="waves-effect">Membership Requests </a></li>
                                    <li><a href="groundrequests.php" class="waves-effect">Ground Booking Requests</a></li>
                                </ul>
                            </li>
							
				
				
				<li id="members">
			   <a href="registered_members.php" class="waves-effect">
                  <i class="glyphicon glyphicon-user" ></i>
				  <span>Registered Members</span>
				  
                </a>
				</li>			
								
								<li id="teams">
			   <a href="teams.php" class="waves-effect">
                  <i class="glyphicon glyphicon-user" ></i>
				  <span>Club Teams</span>
				  
                </a>
				</li>	
				  
                
                  <!--<a href="groundrequests.php" class="waves-effect">
				  <i class="glyphicon glyphicon-envelope"></i>
                    <span>Ground Booking Request</span>
                  </a>
				</li>
				-->				  
                  <!--    
                                                                           <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                                                                -->
                 
              
				
              
			  
			  
			  <li>
               
              </li>
            </ul>
            <div class="clearfix"></div>
          </div> 
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- Left Sidebar End -->
      
	  <footer class="footer text-center">2017 © Diamond Cricket Club Hub.</footer>
      <!-- ============================================================== -->
      <!-- End Right content here -->
      <!-- ============================================================== -->
      <!-- /Right-bar -->
      <!-- /Right-bar -->
    