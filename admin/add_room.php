<?php 
    ob_start();
    session_start();
    include("../connection/connection.php");
    $username=$_SESSION['admnname'];
 
    if(isset($_REQUEST['btn_Add']))
	{
		$vadd_hostel=$_REQUEST['txt_hostel'];
		$vadd_room_type=$_REQUEST['txt_room_type'];
		$vadd_room_no=$_REQUEST['txt_room_no'];
		$vadd_room_beds=$_REQUEST['txt_bed'];
		$vadd_room_disc=$_REQUEST['txt_disc'];
		date_default_timezone_set('Asia/Calcutta');
 	    $vstd_date=date("Y-m-d H:i:s");
		
		$insertstd=$db->query("insert into add_rooms(hostel_id,room_type,room_no,room_beds,room_disc,room_date)values('$vadd_hostel','$vadd_room_type','$vadd_room_no','$vadd_room_beds','$vadd_room_disc','$vstd_date')") or die("query not Work");
		
		echo "<script type='text/javascript'> alert('Room Detail Successfully Inserted'); window.location.href='add_room.php';</script>";
	}
    if(!isset($_SESSION['admnname']))
	{
		header("location:../index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management | Add Rooms</title>
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
                <li class="dropdown active"><a href="add_room.php"><i class="fa fa-plus-square"></i><span>Add Rooms</span></a></li>
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
  		<h2><p class="label label-default">Add Rooms</p></h2>
        
  	</div>
 
 	<div class="admission">
	   <div class="container" style="border: 1px solid #F0F0F0; box-shadow: 0 0 6px #F0F0F0; padding-top: 30px;">
                 <form class="login">
                    <div class="form-group">
						<select  autocomplete="off" class="required form-control"  name="txt_hostel" required>
							 <option  value="">Select Hostel*</option>
							 <?php 
							    $selcourse=$db->query("select * from hostel_type");
							    while($rowcourse=mysqli_fetch_array($selcourse))
								{ ?>
									<option value="<?php echo $rowcourse['hostel_id'] ?>"><?php echo $rowcourse['hostel_typ'] ?></option>
						  <?php }
							?>
							 
						</select>
					</div>
					<div class="form-group">
						<select  autocomplete="off" class="required form-control"  name="txt_room_type" required>
							 <option  value="">Room Type*</option>
							  <option  value="Ac">Ac</option>
							  <option  value="Non Ac">Non Ac</option>
							 
						</select>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Room No *" name="txt_room_no" pattern= "[0-9]{1,3}" required title="Input Only Digit" value="">
					</div>
				    <div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Total Bed*" name="txt_bed" value="" pattern= "[0-9]{1,3}" required title="Input Only Digit between 1 to 3">
					</div>
					<div class="form-group">
						<textarea required autocomplete="off" class="required form-control" placeholder="Room Discription *" name="txt_disc" ></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_Add" value="ADD">
					</div>
                
            </form>
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
</body>
</html>	
