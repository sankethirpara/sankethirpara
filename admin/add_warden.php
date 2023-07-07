<?php 
    ob_start();
    session_start();
    error_reporting(0);
    include("../connection/connection.php");
    $username=$_SESSION['admnname'];
     
     $selwarden=$db->query("select count(*) from warden_reg");
     $reswarden=mysqli_fetch_array($selwarden);
     $totalwrd=$reswarden[0];
     if(isset($_REQUEST['btn_reg']))
	{
		$vwrd_hostel=$_REQUEST['txt_hostel'];
		$vwrd_name=$_REQUEST['txt_name'];
		$vwrd_add=$_REQUEST['txt_add'];
		$vwrd_state=$_REQUEST['txt_state'];
		$vwrd_city=$_REQUEST['txt_city'];
		$vwrd_con=$_REQUEST['txt_con'];
		$vwrd_gen=$_REQUEST['txt_gen'];
		$vwrd_log_id=$_REQUEST['txt_log_id'];
		$vwrd_log_pass=$_REQUEST['txt_log_pass'];
		date_default_timezone_set('Asia/Calcutta');
 	    $vwrd_date=date("Y-m-d H:i:s");
		if($totalwrd>=2)
		{
			echo "<script type='text/javascript'> alert('Wardens Detail Already Inserted Please Update If you want to insered new Detail'); window.location.href='add_warden.php';</script>";
		}
		else
		{
			$insertstd=$db->query("insert into warden_reg(hostel_id,ward_name,ward_add,ward_state,ward_city,ward_contact,ward_gender,ward_login_id,ward_login_pass,ward_date)values('$vwrd_hostel','$vwrd_name','$vwrd_add','$vwrd_state','$vwrd_city','$vwrd_con','$vwrd_gen','$vwrd_log_id','$vwrd_log_pass','$vwrd_date')") or die("query not Work");

			echo "<script type='text/javascript'> alert('Warden Detail Successfully Inserted'); window.location.href='add_warden.php';</script>";
		}
	}
     
    if(isset($_REQUEST['widup']))
	{
		$vedit=$_REQUEST['widup'];
		$seledit=$db->query("select * from warden_reg join hostel_type on warden_reg.hostel_id=hostel_type.hostel_id where warden_reg.warden_id='$vedit'");
		$rowedit=mysqli_fetch_array($seledit);
	}
    
    if(isset($_REQUEST['btn_up']))
	{ 	
	    $vedit=$_REQUEST['widup']; 
	    $vwrd_hostel=$_REQUEST['txt_hostel'];
		$vwrd_name=$_REQUEST['txt_name'];
		$vwrd_add=$_REQUEST['txt_add'];
		$vwrd_state=$_REQUEST['txt_state'];
		$vwrd_city=$_REQUEST['txt_city'];
		$vwrd_con=$_REQUEST['txt_con'];
		$vwrd_gen=$_REQUEST['txt_gen'];
		$vwrd_log_id=$_REQUEST['txt_log_id'];
		$vwrd_log_pass=$_REQUEST['txt_log_pass'];
		date_default_timezone_set('Asia/Calcutta');
 	    $vwrd_date=date("Y-m-d H:i:s");
		$update_warden=$db->query("update warden_reg set hostel_id='$vwrd_hostel',ward_name='$vwrd_name',ward_add='$vwrd_add',ward_state='$vwrd_state',ward_city='$vwrd_city',ward_contact='$vwrd_con',ward_gender='$vwrd_gen',ward_login_id='$vwrd_log_id',ward_login_pass='$vwrd_log_pass',ward_date='$vwrd_date' where warden_id='$vedit'") or die("query not fire");
		echo "<script type='text/javascript'>alert('Warden detail Successfully Updated'); window.location.href='add_warden.php'; </script>";
	}
    if(!isset($_SESSION['admnname']))
	{
		header("location:../index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management | Warden registration</title>
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
<link rel="stylesheet" href="../css/datepicker.css">  
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
<style>
	input.empty {
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
}
	.datepicker,
.table-condensed {
  width: 400px;
  height:auto;
}
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
		        <li><a href="home.php"><i class="fa fa-home"></i><span>Home</span></a></li>
               <li class="dropdown active">
		           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i><span>Registration</span></a>
                     <ul class="dropdown-menu">
			            <li><a href="add_student.php"><span><i class="fa fa-user"></i><span> Student</span></span></a></li>
			            <li><a href="add_warden.php"><span><i class="fa fa-user-circle-o"></i><span> Warden</span></span></a></li>
			        </ul> 
                </li>
                <li><a href="add_room.php"><i class="fa fa-plus-square"></i><span>Add Rooms</span></a></li>
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
		  if(isset($_REQUEST['widup']))
		  { ?>
		<h2><p class="label label-danger">Update Warden DETAIL</p></h2>	   
		<?php  }else {?> <h2><p class="label label-default">Warden Registration</p></h2> <?php } ?>
		
        
  	</div>
 
 	<div class="admission">
	   <div class="container" style="border: 1px solid #F0F0F0; box-shadow: 0 0 6px #F0F0F0; padding-top: 30px;">
                 <form class="login" method="post">
                    <div class="form-group">
						<select  autocomplete="off" class="required form-control"  name="txt_hostel" required>
							 <option  value="">Select Hostel*</option>
							 <?php 
							   if(isset($_REQUEST['widup']))
							   { ?>
								   <option value="<?php echo $rowedit['hostel_id'] ?>" selected="selected"><?php echo $rowedit['hostel_typ'] ?></option>
							     <?php     
							       $selcourse=$db->query("select * from hostel_type");
							    while($rowcourse=mysqli_fetch_array($selcourse))
								{ ?>
									<option value="<?php echo $rowcourse['hostel_id'] ?>"><?php echo $rowcourse['hostel_typ'] ?></option>
						  <?php }
							   }
							   else
							   { 							     		
							     $selcourse=$db->query("select * from hostel_type");
							    while($rowcourse=mysqli_fetch_array($selcourse))
								{ ?>
									<option value="<?php echo $rowcourse['hostel_id'] ?>"><?php echo $rowcourse['hostel_typ'] ?></option>
						  <?php }
						
						      } ?>
							    
							 
						</select>
					</div>
					<div class="form-group">
						<input type="text" required autocomplete="off" class="required form-control" placeholder="Name *" name="txt_name" value="<?php echo $rowedit['ward_name'] ?>">
					</div>
				    <div class="form-group">
						<textarea required autocomplete="off" class="required form-control" placeholder="Address *" name="txt_add"  ><?php echo $rowedit['ward_add'] ?></textarea>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="State *" name="txt_state" value="<?php echo $rowedit['ward_state'] ?>" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="City *" name="txt_city" value="<?php echo $rowedit['ward_city'] ?>" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Contact *" name="txt_con" value="<?php echo $rowedit['ward_contact'] ?>" required size="10">
					</div>
					
				    <div class="form-group">
						<?php 
						 if($rowedit['ward_gender']=='Male')
					     { ?>
						 <h3><label  class="label label-danger" style="margin-left: 25%; float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="Male" checked="cheked"> Male</label></h3>
						<h3><label class="label label-danger" style="margin-left: 5%;float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="female"> female</label></h3>
						<?php 
						 }
						
					    elseif($rowedit['ward_gender']=='female')
					     { ?>
						<h3><label  class="label label-danger" style="margin-left: 25%; float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="Male"> Male</label></h3>
						<h3><label class="label label-danger" style="margin-left: 5%;float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="female" checked="cheked"> female</label></h3>
						<?php 
						 }
						 else
						 { ?>
						 <h3><label  class="label label-danger" style="margin-left: 25%; float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="Male"> Male</label></h3>
						<h3><label class="label label-danger" style="margin-left: 5%;float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="female"> female</label></h3>
						<?php } ?>
						
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Login Id *" name="txt_log_id" value="<?php echo $rowedit['ward_login_id'] ?>" required>
					</div>
					<div class="form-group">
						<input type="password" autocomplete="off" class="required form-control" placeholder="Password *" name="txt_log_pass" value="<?php echo $rowedit['ward_login_pass'] ?>" required>
					</div>
					<div class="form-group">
						<?php 
	                       if(isset($_REQUEST['widup']))
							   { ?>
						       <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_up" value="UPDATE">   
						<?php } else { ?>
						        <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_reg" value="Register"> 
						<?php  }
						?>
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
  
 
  <script src="../js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () 
			 {
                $('#example1').datepicker({ 
                     format: 'yyyy-mm-dd',
				   	autoclose: true,
				   
                });
				
            });
        </script> 
   
</body>
</html>	
