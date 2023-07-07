<?php 
    ob_start();
    session_start();
    include("../connection/connection.php");
    $vwarden_boyz=$_SESSION['username'];  
    
    $sel_name=$db->query("select * from warden_reg where ward_login_id='$vwarden_boyz'");
    $res_name=mysqli_fetch_array($sel_name);  
    $row_name=$res_name['ward_name'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management | boyz hostel Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="../css/font-awesome.css" rel="stylesheet"> 
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
<style>
	
</style>
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
	        <a class="navbar-brand" href="home.php">Hostel</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav" style="padding-top: 10px">
		        <li class="active"><a href="home.php"><i class="fa fa-home"></i><span>Home</span></a></li>
            
                <li><a href="add_leave.php"><i class="fa fa-plus-square"></i><span>Add Leave</span></a></li>
                <li class="dropdown">
		           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-road"></i><span>Student visits</span></a>
                      <ul class="dropdown-menu">
			            <li><a href="student_chk_in_out.php"><span>Add Check in & Out</span></a></li>
			            </ul>   
                </li>
                 <li><a href="visitor.php"><i class="fa fa-user-plus"></i><span>Visitors</span></a></li>
                 <li><a href="rooms.php"><i class="fa fa-lock"></i><span>Rooms</span></a></li>
                 <li class="dropdown">
		           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-road"></i><span>Details</span></a>
                      <ul class="dropdown-menu">
			            <li><a href="student_chk_in_dtl.php"><span> Check_in Detail</span></a></li>
			            <li><a href="student_chk_out_dtl.php"><span> Check_out Detail</span></a></li>
                        <li><a href="leave_dtl.php"><span> Leave Detail</span></a></li> 
                        <li><a href="visitor_dtl.php"><span> Vistors detail</span></a></li>   
			          </ul>   
                </li>
                 <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
		       
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<div class="container" style="margin-top: 10px">
  		<h3><p class="label label-danger">Welcome  <?php echo $row_name; ?></p></h3>
  		<h2><p class="label label-default"># Dashboard</p></h2>
        
         <div class="admission">
	   <div class="container">
	   	 <div class="faculty_top">
	   	 <!------------columns----strat--------->
	   	  <div class="col-md-4 faculty_grid">
	   	  	<figure class="team_member">
	   	  	    
	   	  		<span  style="background-color: burlywood; height:250px; width: 750px " class="img-responsive wp-post-image" alt=""> 
	   	  		<h2 align="center" style="padding-top:60px;"><i class="fa fa-university" aria-hidden="true"></i></h2> 
	   	  		</span>
	   	  		<div>
	   	  			
	   	  		</div>
				<?php
				$count_rms=$db->query("select count(*) from add_rooms");				
				$rst_rms=mysqli_fetch_array($count_rms);
				$total_rms=$rst_rms[0];
				?>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html">Total Rooms & Students</a></h3>
	   	  			<span class="person-deg"><?php 
						echo $total_rms ?> Boyz Rooms</span>
	   	  			<p><a href="#">Including Boys Only Hostel</a></p>
	   	  			<p></p>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="room_detail.php">See All</a></li>
	   	  					
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <!------------columns---Over---------->
	   	  <!------------columns----strat--------->
	   	  <div class="col-md-4 faculty_grid">
	   	  	<figure class="team_member">
	   	  	    
	   	  		<span  style="background-color: burlywood; height:250px; width: 750px " class="img-responsive wp-post-image" alt=""> 
	   	  		<h2 align="center" style="padding-top:60px;"><i class="fa fa-user-circle" aria-hidden="true"></i></h2> 
	   	  		</span>
	   	  		<div>
	   	  			
	   	  		</div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html">Total Leave </a></h3>
					<?php
					    $count_std=$db->query("select count(*) from student_reg");
						$res_std=mysqli_fetch_array($count_std);
						$total_std=$res_std[0];
					?>
	   	  			<span class="person-deg">(<?php  echo $total_std; ?>) Leaves</span>
	   	  			<p><a href="#">Including Only Boyz Hostel</a></p>
	   	  			<p></p>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#">See All</a></li>
	   	  					
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <!------------columns---Over---------->
	   	  <!------------columns----strat--------->
	   	  <div class="col-md-4 faculty_grid">
	   	  	<figure class="team_member">
	   	  	    
	   	  		<span  style="background-color: burlywood; height:250px; width: 750px " class="img-responsive wp-post-image" alt=""> 
	   	  		<h2 align="center" style="padding-top:60px;"><i class="fa fa-unlock-alt" aria-hidden="true"></i></h2> 
	   	  		</span>
	   	  		<div>
	   	  			
	   	  		</div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html">Total Check In Students</a></h3>
	   	  		<?php 
					$count_book_rms=$db->query("select count(*) from room_allote");
					$res_book_rms=mysqli_fetch_array($count_book_rms);
					$total_book_rms=$res_book_rms[0];
    					?>
					<span class="person-deg"><?php echo $total_book_rms 
						?> Check In</span>
	   	  			<p><a href="mailto@example.com">Including Only Boys Hostel</a></p>
	   	  			<p></p>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#">See All</a></li>
	   	  					
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  	</div>
	   	  	 <div class="clearfix"> </div>
	   	  <!------------columns---Over---------->
		 </div>
		  <div class="faculty_top">
		       <!------------columns----strat--------->
	   	  <div class="col-md-4 faculty_grid" style="margin-left:18%">
	   	  	<figure class="team_member">
	   	  	    
	   	  		<span  style="background-color: burlywood; height:250px; width: 750px " class="img-responsive wp-post-image" alt=""> 
	   	  		<h2 align="center" style="padding-top:60px;"><i class="fa fa-bullhorn" aria-hidden="true"></i></h2> 
	   	  		</span>
	   	  		<div>
	   	  			
	   	  		</div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html">Total Check Out</a></h3>
					<?php 
					$count_complain=$db->query("select count(*) from complain");
	                $rst_complain=mysqli_fetch_array($count_complain);
					$total_complain=$rst_complain[0];
					?>
	   	  			<span class="person-deg"><?php
						echo $total_complain ?> Check Out</span>
	   	  			<p><a href="mailto@example.com">Including Only Boys Hostel</a></p>
	   	  			<p></p>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#">See All</a></li>
	   	  					
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	    </div>
	   	    <!------------columns---Over---------->
	   	     <!------------columns----strat--------->
	   	    <div class="col-md-4 faculty_grid">
	   	  	<figure class="team_member">
	   	  	    
	   	  		<span  style="background-color: burlywood; height:250px; width: 750px " class="img-responsive wp-post-image" alt=""> 
	   	  		<h2 align="center" style="padding-top:60px;"><i class="fa fa-book" aria-hidden="true"></i></h2> 
	   	  		</span>
	   	  		<div>
	   	  			
	   	  		</div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html">Total Visitors</a></h3>
					<?php
					$count_course=$db->query("select count(*) from course");
	                $rst_course=mysqli_fetch_array($count_course);
					$total_course=$rst_course[0];
					?>
	   	  			<span class="person-deg"><?php 
						echo $total_course
						?> Visitors</span>
	   	  			<p><a href="mailto@example.com">Total Visitors Boyz Hostel</a></p>
	   	  			<p></p>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#">See All</a></li>
	   	  					
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	    </div>
	   	   <!------------columns----Over---------> 
	   	    
		  </div>
		</div>
	</div>
    
       <div class="grid_1">
     	<div class="container"> 
     	  <h2>Recent Check in Student Details</h2>
			<div class="bs-docs-example">
			 <table class="table table-hover">
               <thead style="background:#2f374c; color: azure">
                 <tr>
                	<th  >ID</th>
                	<th  >Hostel</th>
                	<th  >Name</th>
                    <th >Add</th>
                    <th  >State</th>
                    <th  >City</th>
                    <th  >Contact</th>
                    <th  >Gender</th>
                    <th  >Login Id</th>
                    <th  >Login pass</th>
                    <th >Admission Date</th>
                    <th>Action</th>
				</tr>
				</thead>
                <tbody style="	background:#f2f4f5;">
                  <?php 
					  $selwarden=$db->query("select * from hostel_type join warden_reg on hostel_type.hostel_id=warden_reg.hostel_id");
					  while($row_warden=mysqli_fetch_array($selwarden))
						 { ?>
									<tr>
										<td  ><?php echo $row_warden['warden_id'] ?></td>
										<td  ><?php echo $row_warden['hostel_typ'] ?></td>
										<td  ><?php echo $row_warden['ward_name'] ?></td>
										<td  ><?php echo $row_warden['ward_add'] ?></td>
										<td  ><?php echo $row_warden['ward_state'] ?></td>
										<td  ><?php echo $row_warden['ward_city'] ?></td>
										<td  ><?php echo $row_warden['ward_contact'] ?></td>
										<td  ><?php echo $row_warden['ward_gender'] ?></td>
										<td  ><?php echo $row_warden['ward_login_id'] ?></td>
										<td  ><?php echo $row_warden['ward_login_pass'] ?></td>
										<td  ><?php echo $row_warden['ward_date'] ?></td>
				                        <td><a href="add_warden.php?widup=<?php echo $row_warden['warden_id'] ?>" onclick="return confirm('are you sure you want to Edit')">
				                        <span class="label label-danger">EDIT</span>
				                        </a>
				                        <br>
				                        <a href="home.php?widdel=<?php echo $row_warden['warden_id'] ?>" onclick="return confirm('are you sure you want to DELETE')">
				                        <span class="label label-danger">DELETE</span>
				                        </a>
				                        </td>
					                 </tr>	 
						<?php }
					?> 
                    
    				
				</tbody>
			
			</table>
			</div>  	 		
    	</div>
</div>	
         <div class="grid_1">
     	<div class="container"> 
     	  <h2>Recent Check OUT Student Details</h2>
			<div class="bs-docs-example">
			 <table class="table table-hover">
               <thead style="background:#2f374c; color: azure">
                 <tr>
                	<th  >ID</th>
                	<th  >Hostel</th>
                	<th  >Name</th>
                    <th >Add</th>
                    <th  >State</th>
                    <th  >City</th>
                    <th  >Contact</th>
                    <th  >Gender</th>
                    <th  >Login Id</th>
                    <th  >Login pass</th>
                    <th >Admission Date</th>
                    <th>Action</th>
				</tr>
				</thead>
                <tbody style="	background:#f2f4f5;">
                  <?php 
					  $selwarden=$db->query("select * from hostel_type join warden_reg on hostel_type.hostel_id=warden_reg.hostel_id");
					  while($row_warden=mysqli_fetch_array($selwarden))
						 { ?>
									<tr>
										<td  ><?php echo $row_warden['warden_id'] ?></td>
										<td  ><?php echo $row_warden['hostel_typ'] ?></td>
										<td  ><?php echo $row_warden['ward_name'] ?></td>
										<td  ><?php echo $row_warden['ward_add'] ?></td>
										<td  ><?php echo $row_warden['ward_state'] ?></td>
										<td  ><?php echo $row_warden['ward_city'] ?></td>
										<td  ><?php echo $row_warden['ward_contact'] ?></td>
										<td  ><?php echo $row_warden['ward_gender'] ?></td>
										<td  ><?php echo $row_warden['ward_login_id'] ?></td>
										<td  ><?php echo $row_warden['ward_login_pass'] ?></td>
										<td  ><?php echo $row_warden['ward_date'] ?></td>
				                        <td><a href="add_warden.php?widup=<?php echo $row_warden['warden_id'] ?>" onclick="return confirm('are you sure you want to Edit')">
				                        <span class="label label-danger">EDIT</span>
				                        </a>
				                        <br>
				                        <a href="home.php?widdel=<?php echo $row_warden['warden_id'] ?>" onclick="return confirm('are you sure you want to DELETE')">
				                        <span class="label label-danger">DELETE</span>
				                        </a>
				                        </td>
					                 </tr>	 
						<?php }
					?> 
                    
    				
				</tbody>
			
			</table>
			</div>  	 		
    	</div>
</div>	
    </div>   
<div class="footer">
    	<div class="container">
    		
    		<div class="copy">
		       <p>Devlope | Design by <a href="#">TEJAS.P.MISTRY / MAYURI.M.KASURDE / BIJAL.D.RANA </a> </p>
	        </div>
    	</div>
    </div>
<script src="../js/jquery.countdown.js"></script>
<script src="../js/script.js"></script>
</body>
</html>	
    