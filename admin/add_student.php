<?php 
    ob_start();
    session_start();
    include("../connection/connection.php");
    $username=$_SESSION['admnname'];
 
    if(isset($_REQUEST['btn_reg']))
	{
		$vstd_course=$_REQUEST['txt_course'];
		$vstd_name=$_REQUEST['txt_name'];
		$vstd_enroll=$_REQUEST['txt_enrollno'];
		$vstd_dob=$_REQUEST['txt_dob'];
		$vstd_fname=$_REQUEST['txt_ft_name'];
		$vstd_mname=$_REQUEST['txt_mt_name'];
		$vstd_gen=$_REQUEST['txt_gen'];
		$vstd_add=$_REQUEST['txt_add'];
		$vstd_state=$_REQUEST['txt_state'];
		$vstd_city=$_REQUEST['txt_city'];
		$vstd_con=$_REQUEST['txt_con'];
		$vstd_pcon=$_REQUEST['txt_pcon'];
		date_default_timezone_set('Asia/Calcutta');
 	    $vstd_date=date("Y-m-d H:i:s");
		
		$insertstd=$db->query("insert into student_reg(course_id,std_name,std_enroll,std_dob,std_fathername,std_mothername,std_gender,std_add,std_state,std_city,std_contact,std_prnt_contact,std_date)values('$vstd_course','$vstd_name','$vstd_enroll','$vstd_dob','$vstd_fname','$vstd_mname','$vstd_gen','$vstd_add','$vstd_state','$vstd_city','$vstd_con','$vstd_pcon','$vstd_date')") or die("query not Work");
		
		echo "<script type='text/javascript'> alert('Student Detail Successfully Inserted'); window.location.href='add_student.php';</script>";
	}
    if(!isset($_SESSION['admnname']))
	{
		header("location:../index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hostel Management | Student registration</title>
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
  		<h2><p class="label label-default">Student Registration</p></h2>
        
  	</div>
 
 	<div class="admission">
	   <div class="container" style="border: 1px solid #F0F0F0; box-shadow: 0 0 6px #F0F0F0; padding-top: 30px;">
                 <form class="login">
                    <div class="form-group">
						<select  autocomplete="off" class="required form-control"  name="txt_course" required>
							 <option >Select Field *</option>
							 <?php 
							    $selcourse=$db->query("select * from course");
							    while($rowcourse=mysqli_fetch_array($selcourse))
								{ ?>
									<option value="<?php echo $rowcourse['course_id'] ?>"><?php echo $rowcourse['course_name'] ?></option>
						  <?php }
							?>
							 
						</select>
					</div>
					<div class="form-group">
						<input type="text" required autocomplete="off" class="required form-control" placeholder="Name *" name="txt_name" value="">
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Enroll Name *" name="txt_enrollno" pattern="[0-9]{12}" required title="Input Correct Enroll Formate" value="">
					</div>
				    <div class="form-group">
						<input type="text" autocomplete="off" class="required form-control empty" placeholder="&#xf073; Date Of Birth" name="txt_dob" value="" id="example1" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Father Name *" name="txt_ft_name" value="" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Mother Name *" name="txt_mt_name" value="" required>
					</div>
					<div class="form-group">
						<h3><label  class="label label-danger" style="margin-left: 25%; float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="Male"> Male</label></h3>
						<h3><label class="label label-danger" style="margin-left: 5%;float: left; display: inline; cursor: pointer"><input type="radio" class="" name="txt_gen" value="female"> female</label></h3>
					</div>
					<div class="form-group">
						<textarea required autocomplete="off" class="required form-control" placeholder="Address *" name="txt_add" ></textarea>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="State *" name="txt_state" value="" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="City *" name="txt_city" value="" required>
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Contact *" name="txt_con" value="" required size="10">
					</div>
					<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Parents Contact *" name="txt_pcon" value="" required size="10">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_reg" value="Register">
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
