<?php
	//require_once('dbconfig/config.php');
	       
			
				echo $sname=$_POST['sname'];
				echo $usn=$_POST['usn'];
				echo $email=$_POST['email'];
				echo $sdob=$_POST['sdob'];
				echo $sph=$_POST['sph'];
				echo $father=$_POST['father'];
				echo $sfph=$_POST['sfph'];
				echo $syear=$_POST['syear'];
				echo $sx=$_POST['sx'];
				echo $sxyop=$_POST['sxyop'];
				echo $sxii=$_POST['sxii'];
				echo $sxiiyop=$_POST['sxiiyop'];
				echo $si=$_POST['si'];
				echo $sii=$_POST['sii'];
				echo $siii=$_POST['siii'];
				echo $siv=$_POST['siv'];
				echo $sv=$_POST['sv'];
				echo $svi=$_POST['svi'];
				echo $svii=$_POST['svii'];
				echo $sviii=$_POST['sviii'];
				
                    $query = "select * from student where 'email'='$email'";
					$con=mysqli_connect("localhost","root","","rljit_cse");
                    $query_run = mysqli_query($con,$query);
                   
						if($query_run)
                        {
							//(sname,usn,email,sdob,sph,father,sfph,syear,sx,sxyop,sxii,sxiiyop,si,sii,siii,siv,sv,svi,svii,sviii)
							$query1 = "UPDATE student SET sname='$sname', usn='$usn', sdob='$sdob', sph='$sph', father='$father', sfph='$sfph', syear='$syear', sx='$sx', sxyop='$sxyop', sxii='$sxii', sxiiyop='$sxiiyop', si='$si', sii='$sii', siii='$siii', siv='$siv', sv='$sv', svi='$svi', svii='$svii', sviii='$sviii' 	where email='$email'";
							$query_run_a = mysqli_query($con,$query1);
							if($query_run_a)
							{
								//echo '<script type="text/javascript">alert("updated.")</script>';
								echo '<script type="text/javascript">alert("Student Data Updated"); 	window.location = "/rljit_cse/staff_homepage.php";</script>';
								
							}
							else{
								//echo '<script type="text/javascript">alert("not updated.")</script>';
								echo '<script type="text/javascript">alert("Student Data Not Updated"); 	window.location = "/rljit_cse/staff_homepage.php";</script>';
							}
						}
						else
						{
							//echo '<script type="text/javascript">alert("sorry.")</script>';
							echo '<script type="text/javascript">alert("ERROR"); 	window.location = "/rljit_cse/staff_homepage.php";</script>';
							
						}
					
					
					
?>
<?php
				session_start();
				if($_SESSION['email']==true and $_SESSION['password']==true)
				{
					
				}
				else
				{
					header('location: /rljit_cse/login.html');
				}		
?>