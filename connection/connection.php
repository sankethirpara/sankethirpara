<?php 
     ob_start();
     $db_hostname="localhost";
     $db_username="root";
	 $db_pass="";
     $db_name="hostel_management";
    
     $db=new MySQLi($db_hostname,$db_username,$db_pass,$db_name);
    
     if($db->connect_error)
		{
		    die("Unabale to connect database".$db->connect_error);
		}

?>