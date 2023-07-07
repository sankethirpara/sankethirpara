 <?php 
    ob_start();
    session_start();
    include("connection/connection.php");

/*********************Warden-Login-code-start*********************************************/
	if(isset($_REQUEST['btn_log'])) 
	{
		$vlogid=$_REQUEST['log_user'];
		$vpass=$_REQUEST['log_pass'];
		$vuser=$_REQUEST['log_username'];
		
		if($vuser=='1')
		{
			$selwardenboy=$db->query("select * from warden_reg where ward_login_id='$vlogid' and ward_login_pass='$vpass'");
			if(mysqli_num_rows($selwardenboy))
			{
			  $_SESSION['username']=$vlogid;	 
			  echo "<script type='text/javascript'> alert('Login Success'); window.location.href='hostel_boys/home.php'; </script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert('Invalid Username Or Password'); window.location.href='index.php'; </script>";
			}
			
		}
		elseif($vuser=='2')
		{
			$selwardengirl=$db->query("select * from warden_reg where ward_login_id='$vlogid' and ward_login_pass='$vpass'");
			if(mysqli_num_rows($selwardengirl))
			{
			  $_SESSION['username']=$vlogid;	
			  echo "<script type='text/javascript'> alert('Login Success'); window.location.href='hostel_girls/home.php'; </script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert('Invalid Username Or Password'); window.location.href='index.php'; </script>";
			}
		}
	}
   
/*********************Warden-Login-code-Over*********************************************/

/*********************Admin Login code start********************************/
 if(isset($_REQUEST['btn_admn']))
	{
		$vadmnuser=$_REQUEST['log_admn_user'];
		$vadmnpass=$_REQUEST['log_admn_pass'];
		$seladmn=$db->query("select * from admin_login where username='$vadmnuser' and password='$vadmnpass'");
		if(mysqli_num_rows($seladmn)>0)
		{
			$_SESSION['admnname']=$vadmnuser;
			echo "<script type='text/javascript'> alert('Login Success'); window.location.href='admin/home.php'; </script>";
		}
		else
		{
				echo "<script type='text/javascript'> alert('Invalid Username Or Password'); window.location.href='index.php'; </script>";
		}
	}
/*********************Admin Login code Over********************************/

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header" style="padding-bottom: 10px;">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php">Hostel</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav" style="padding-top: 10px">
		        <li class="dropdown">
		           <a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i><span>Home</span></a>
                </li>
               <li class="dropdown">
		           <a href="about.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i><span>About</span></a>
                </li>
                <li class="dropdown">
		           <a href="contact.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-phone"></i><span>Contact</span></a>
                </li>
		       
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>

<!-- banner -->
	<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h3>Stay in touch<span>Lorem Ipsum</span></h3>
											<p>Inspired by bold colors and matching up to football’s on-pitch
												playmakers, these kicks are ready to stand out.
											</p>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
									<div class="container">
										<div class="banner-info">
											<h3>therefore always<span>looks reasonable</span></h3>
											<p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
												playmakers, these Brasil’s kicks are ready to stand out.
											</p>
											
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h3> trivial example,<span>who chooses</span></h3>
											<p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch
												playmakers, these kicks Brasil’s are ready to stand out.
											</p>
											
										</div>
									</div>
								</div>
							</li>
							
						</ul>
		          </div>
	</div>
	<!-- //banner -->
	
     <div class="grid_1">
     	<div class="container">
     		<div class="col-md-4">
                <div class="news">
					<h2>Welcome To </h2><h3>Hostel management</h3>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>Introduction</figure>
                            	The  online  hostel  management  system  is  web  based  software  to  provide  college  
								students  accommodation  to  the  university  
								hostel  more  efficiently.  This  project  
								also keeps details of the hostellers and a
								pplied students. It is headed by Warden. 
								He  will  be  the  administrator.  For  accommodate  a  large  number  of  students  into  
								hostel.  
								This document is intended to minimize 
								human works and make hostel allocation 
								is    an  easier  job  for  cusat  students  
								and  hostel  authorities  by  providing  online  
								application for hostel, automatically select the students from the waiting list and 
								mess  calculation,  complaint  registration,  notice  board  etc.
                        </article>
                        
                    </div><!-- /.section-content -->
                    <a href="about.php" class="read-more">Read More</a>
                </div><!-- /.news-small -->
            </div>
            <div class="col-md-8 grid_1_right">
              <h2>Login Area</h2>
		      <div class="but_list" style="border: 1px solid #E8E8E8">
		       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Warden -&nbsp;Login</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Admin -&nbsp;Login</a></li>
				
				</ul>
			<div id="myTabContent" class="tab-content">
			  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
			    <div class="events_box">
			    	
			    	<div class="event_right">
			    		  <h3 style="margin-left: 10px"><a href="#">Hostel Warden Login</a></h3>
						    <form class="login">
								<div class="form-group">
									<select autocomplete="off" name="log_username" class="required form-control">
									 <option >SELECT WARDEN</option>
									  <?php 
										  $selhostel=$db->query("select * from hostel_type");
										  while($reshostel=mysqli_fetch_array($selhostel))
										  { ?>
										      <option value="<?php echo $reshostel['hostel_id'] ?>"><?php echo $reshostel['hostel_typ'] ?></option>
											   
									   <?php }
										
										?>
									 </select>
								</div>
								
								<div class="form-group">
									<input autocomplete="off" type="text" name="log_user" class="required form-control" placeholder="Username">
								</div>
								<div class="form-group">
								
								
									<input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="log_pass">
								</div>
								<div class="form-group">
							<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_log" value="Log In">
								</div>
								
						 </form>
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			  
			  </div>
			<!------------------------------------Admin Login from code- start-------------------------------------->	
				
			  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
			    <div class="events_box">
			    	
			    	<div class="event_right">
			    		  <h3  style="margin-left: 10px"><a href="#">Admin Login</a></h3>
						    <form class="login" method="post">
								<div class="form-group">
									<input autocomplete="off" type="text" name="log_admn_user" class="required form-control" placeholder="Username">
								</div>
									<div class="form-group">
									<input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="log_admn_pass">
								</div>
								<div class="form-group">
									
									<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_admn" value="Log In">
								</div>
								
						 </form>	
		    	    </div>
		    	    <div class="clearfix"></div>
			   </div>
			 </div>
			<!------------------------------------Admin Login from code- Over-------------------------------------->		
			
		     </div>
		    </div>
		   </div>
      </div>
      <div class="clearfix"> </div>
     </div>
    </div>
  
   
    <div class="footer">
    	<div class="container">
    		
    		<div class="copy">
		       <p>Devlope | Design by <a href="#">TEJAS.P.MISTRY / MAYURI.M.KASURDE / BIJAL.D.RANA </a> </p>
	        </div>
    	</div>
    </div>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	