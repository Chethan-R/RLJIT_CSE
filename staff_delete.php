
<?php
	//require_once('dbconfig/config.php');
			session_start();
				if($_SESSION['username']==true and $_SESSION['password']==true)
				{			
		             echo $email=$_GET['email'];
				
                
				
					$query = "select * from `staff` where `email`='$email'";
                    $con=mysqli_connect("localhost","root","","rljit_cse");
                    $query_run = mysqli_query($con,$query);
                   
				
					
						if(mysqli_num_rows($query_run)>0)
						{
							$query = "DELETE FROM `staff` WHERE email='$email'";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								
								echo '<script type="text/javascript">alert("Staff Data Deleted"); 	window.location = "/rljit_cse/staff_view.php";</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("Staff Data Not Deleted"); 	window.location = "/rljit_cse/staff_view.php";</script>';
								
							}
						}
				}
				else
				{
					header('location: /rljit_cse/login.html');
				}	
?>
