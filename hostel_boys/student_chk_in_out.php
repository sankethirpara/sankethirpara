<?php 
    ob_start();
    session_start();
    include("../connection/connection.php");
    $vwarden_boyz=$_SESSION['username'];  
    
    $sel_name=$db->query("select * from warden_reg where ward_login_id='$vwarden_boyz'");
    $res_name=mysqli_fetch_array($sel_name);  
    $row_name=$res_name['ward_name'];
    if(isset($_REQUEST['btn_reg']))
    {
        $venroll=$_REQUEST['txt_enrollno'];
        date_default_timezone_set("Asia/Calcutta");
        $vdate=date("Y-m-d H:i:s");
            
            
    }
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
</div>
	<div class="admission">
	   <div class="container" style="border: 1px solid #F0F0F0; box-shadow: 0 0 6px #F0F0F0; padding-top: 30px;">
                 <form class="login">
                	<div class="form-group">
						<input type="text" autocomplete="off" class="required form-control" placeholder="Enroll Number *" name="txt_enrollno" pattern="[0-9]{12}" required title="Input Correct Enroll Formate" value="">
					</div>
				   
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="btn_reg" value="Register">
					</div>
                
            </form>
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