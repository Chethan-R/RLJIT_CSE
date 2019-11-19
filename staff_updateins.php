<?php
	//require_once('dbconfig/config.php');
	       
			
			echo $stname=$_POST['stname'];
			echo $password=$_POST['password'];
			echo $email=$_POST['email'];
			echo $adhar=$_POST['adhar'];
			echo $staffph=$_POST['staffph'];
			echo $qualification=$_POST['qualification'];
			echo $job=$_POST['job'];
				
                    $query = "select * from staff where 'email'='$email'";
					$con=mysqli_connect("localhost","root","","rljit_cse");
                    $query_run = mysqli_query($con,$query);
                   
						if($query_run)
                        {
							$query1 = "UPDATE staff SET stname='$stname', password='$password', adhar='$adhar', staffph='$staffph', qualification='$qualification', job='$job' 	where email='$email'";
							$query_run_a = mysqli_query($con,$query1);
							if($query_run_a)
							{
								//echo '<script type="text/javascript">alert("updated.")</script>';
								echo '<script type="text/javascript">alert("Staff Data Updated"); 	window.location = "/rljit_cse/staff_view.php";</script>';
								
							}
							else{
								//echo '<script type="text/javascript">alert("not updated.")</script>';
								echo '<script type="text/javascript">alert("Staff Data Not Updated"); 	window.location = "/rljit_cse/staff_view.php";</script>';
							}
						}
						else
						{
							//echo '<script type="text/javascript">alert("sorry.")</script>';
							echo '<script type="text/javascript">alert("ERROR"); 	window.location = "/rljit_cse/staff_view.php";</script>';
							
						}
					
					
					
?>
<?php
				session_start();
				if($_SESSION['username']==true and $_SESSION['password']==true)
				{
					
				}
				else
				{
					header('location: /rljit_cse/login.html');
				}		
?>