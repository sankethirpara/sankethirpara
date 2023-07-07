<?php 
    ob_start();
    session_start();
    include("../connection/connection.php");
    $username=$_SESSION['admnname'];
    
    if(isset($_REQUEST['book']))
	{
		$vbook=$_REQUEST['book'];
		$selbook=$db->query("select * from hostel_type join add_rooms on hostel_type.hostel_id=add_rooms.hostel_id where add_rooms.room_id='$vbook'") or die("query not look good");
		$rows=mysqli_fetch_array($selbook);
	}
    
     if(isset($_REQUEST['btn_add']))
	 {
	    $vbook_id=$_REQUEST['txt_id'];
		$vbook_enroll=$_REQUEST['txt_enroll'];
		date_default_timezone_set('Asia/Calcutta');
 	    $vbook_date=date("Y-m-d H:i:s");
		$book_room=$db->query("insert into room_allote(room_id,std_enroll,room_alt_date)values('$vbook_id','$vbook_enroll','$vbook_date')"); 
		echo "<script type='text/javascript'> alert('Room Successfully booked'); window.location.href='book_room.php'; </script>"; 
	 }
    if(!isset($_SESSION['admnname']))
	{
		header("location:../index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management | Rooms Detail</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />


<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="../css/font-awesome.css" rel="stylesheet"> 

<!----font-Awesome----->
 <script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
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
	        <a class="navbar-brand" href="home.php">Hostel</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav" style="padding-top: 10px">
		        <li><a href="home.php"><i class="fa fa-home"></i><span>Home</span></a></li>
               <li class="dropdown">
		           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i><span>Registration</span></a>
                     <ul class="dropdown-menu">
			            <li><a href="add_student.php"><span><i class="fa fa-user"></i><span> Student</span></span></a></li>
			            <li><a href="add_warden.php"><span><i class="fa fa-user-circle-o"></i><span> Warden</span></span></a></li>
			        </ul> 
                </li>
                <li class="dropdown"><a href="add_room.php"><i class="fa fa-plus-square"></i><span>Add Rooms</span></a></li>
                <li><a href="book_room.php"><i class="fa fa-lock"></i><span>Book Rooms</span></a></li>
                 <li class="dropdown">
		           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-road"></i><span>Student visits</span></a>
                      <ul class="dropdown-menu">
			            <li><a href="student_chk_in.php"><span> Check_in</span></a></li>
			            <li><a href="student_chk_out.php"><span> Check_out</span></a></li>
			          </ul>   
                </li>
                 <li><a href="visitor.php"><i class="fa fa-user-plus"></i><span>Visitors</span></a></li>
                 <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
		       
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
  	<div class="container" style="margin-top: 10px">
  		<h3><p class="label label-danger">Welcome  <?php echo $username; ?></p></h3>
		<?php
		   if(isset($_REQUEST['book']))
		  { ?> 
		 <h2><p class="label label-default">Allote Rooms</p></h2>
		<?php
		  }
	    else
		 { ?>
		<h2><p class="label label-default">Book Rooms</p></h2>
		<?php 
		 } ?>
	
  		
         
		   
</div>
	
	 <?php
		  if(isset($_REQUEST['book']))
		  { ?>
	   
		 <div class="container" style="margin-bottom:50px;margin-top:50px">
			<form method="post" class="login">
			<div class="form-group">
						<input type="text" required autocomplete="off" class="required form-control"  name="txt_hostel" value="<?php echo $rows['hostel_typ'] ?>" readonly>
			</div>	
		    <div class="form-group">
						<input type="text" required autocomplete="off" class="required form-control"  name="txt_id" value="<?php echo $rows['room_id'] ?>" readonly>
			</div>
			 <div class="form-group">
						<input type="text" required autocomplete="off" class="required form-control" placeholder="Enroll *" name="txt_enroll" value="">
			 </div>
			 <div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_add" value="ADD">
			 </div>
			</form> 	
		 </div>	
		  
		<?php  }
		else
		{ ?>
		<div class="container" style="margin-top:100px;margin-bottom:100px">
        	 <ul class="nav nav-tabs">
		    	<li style="border-bottom:1px solid #000" class="active"><a data-toggle="tab" href="#home">Boys Hostel</a></li>
			    <li style="border-bottom:1px solid #000"><a data-toggle="tab" href="#menu1">Gilrs Hostel</a></li>
			 </ul>
		  <div class="tab-content">
			<div id="home" class="tab-pane fade in active">
			  <h3>Boys Hostel Rooms</h3>
               <div style="box-shadow:0 0 1px #000; width:100%; margin-top:10px; padding:20px 20px 20px 20px;">
		<div class="grid_1">
     	
			<div class="bs-docs-example">
			 <table class="table table-hover">
               <thead style="background:#2f374c; color: azure">
                 <tr>
                	<th >ID</th>
                	<th >Hostel</th>
                	<th >Room Type</th>
                    <th >Room No</th>
                    <th >Room Beds</th>
                    <th >Enroll</th>
					<th>Action</th>  
                  </tr>
				</thead>
                <tbody style="	background:#f2f4f5;">
                  <?php 
					  $selwarden=$db->query("select * from hostel_type join add_rooms join room_allote join student_reg on hostel_type.hostel_id=add_rooms.hostel_id and add_rooms.room_id=room_allote.room_id and room_allote.std_enroll=student_reg.std_enroll where hostel_type.hostel_typ='boys hostel'");
					  while($row_warden=mysqli_fetch_array($selwarden))
						 { ?>
									<tr>
										<td  ><?php echo $row_warden['room_id'] ?></td> 
										<td  ><?php echo $row_warden['hostel_typ'] ?></td>
										<td  ><?php echo $row_warden['room_type'] ?></td>
										<td  ><?php echo $row_warden['room_no'] ?></td>
										<td  ><?php echo $row_warden['room_beds'] ?></td>
										<td ><?php echo $row_warden['std_enroll'] ?></td>
										<td>
				                  <a href="room_detail.php?del=<?php echo $row_warden['room_id'] ?>"> <span class="label label-danger">Delete</span></a><br>
									<a href="room_detail.php?edit=<?php echo $row_warden['room_id'] ?>"> <span class="label label-danger">Edit</span></a>		
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
			
			<div id="menu1" class="tab-pane fade">
			  <h3>Girls Hostel Rooms</h3>
			   <div style="box-shadow:0 0 1px #000; width:100%; margin-top:30px; padding:20px 20px 20px 20px;"> 
				    <div class="grid_1">
     	
			<div class="bs-docs-example">
			 <table class="table table-hover">
               <thead style="background:#2f374c; color: azure">
                 <tr>
                	<th >ID</th>
                	<th >Hostel</th>
                	<th >Room Type</th>
                    <th >Room No</th>
                    <th >Room Beds</th>
                    <th >Enroll</th>
					<th>Action</th>
                  </tr>
				</thead>
                <tbody style="	background:#f2f4f5;">
                  <?php 
					  $selwarden=$db->query("select * from hostel_type join add_rooms join room_allote join student_reg on hostel_type.hostel_id=add_rooms.hostel_id and add_rooms.room_id=room_allote.room_id and room_allote.std_enroll=student_reg.std_enroll where hostel_type.hostel_typ='girls hostel'");
					  while($row_warden=mysqli_fetch_array($selwarden))
						 { ?>
									<tr>
										<td  ><?php echo $row_warden['room_id'] ?></td> 
										<td  ><?php echo $row_warden['hostel_typ'] ?></td>
										<td  ><?php echo $row_warden['room_type'] ?></td>
										<td  ><?php echo $row_warden['room_no'] ?></td>
										<td  ><?php echo $row_warden['room_beds'] ?></td>
										<td ><?php echo $row_warden['std_enroll'] ?></td>
										<td><a href="room_detail.php?del=<?php echo $row_warden['room_id'] ?>"> <span class="label label-danger">Delete</span></a><br>
									<a href="room_detail.php?edit=<?php echo $row_warden['room_id'] ?>"> <span class="label label-danger">Edit</span></a></td>
					                 </tr>	 
						<?php }
					?> 
                    
    				
				</tbody>
			
			</table>
			</div>  	 		
    	</div>
				</div>
			 </div>
		</div>
			
	</div>	
 <?php }
		?>
	
	
<div class="footer">
    	<div class="container">
    		
    		<div class="copy">
		       <p>Devlope | Design by <a href="#">TEJAS.P.MISTRY / MAYURI.M.KASURDE / BIJAL.D.RANA </a> </p>
	        </div>
    	</div>
  </div>
  