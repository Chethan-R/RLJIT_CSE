<?php 
session_start();
if($_SESSION['username']==true and $_SESSION['password']==true)
{
	
	$stname=$_POST['stname'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$adhar=$_POST['adhar'];
	$staffph=$_POST['staffph'];
	$qualification=$_POST['qualification'];
	$job=$_POST['job'];
	
	$conn=mysqli_connect("localhost","root","","rljit_cse");
    
	if ($conn)
	{
		//echo "*****Database Connected *****";
	}
	else
	{
		echo "Error creating database: " .mysqli_error($conn);
	}
	
	$check_duplicate="SELECT * FROM staff WHERE email  = '$email'";
	$result=mysqli_query($conn,$check_duplicate);
	$count=mysqli_num_rows($result);
	
	if($count>0)
	{
		echo "<h4>Mail is already taken. Please use another Mail</h4>";
	}
	else
	{
	
	$sql= "insert into staff (stname,password,email,adhar,staffph,qualification,job) values ('$stname','$password','$email','$adhar','$staffph','$qualification','$job')";
	
	$check=mysqli_query($conn, $sql);
	
	if($check)
	{
		//echo " Staff Data Added ";
		//header('location: .html');
		echo "<div align='center' > <font size=6> Staff Added Succussfully </font></div> ";
		//header('location: 1sgeStdent.html');
		
			echo '<script type="text/javascript">alert("Data Added");    window.location = "/rljit_cse/staff_add1.php";    </script>';
		
	}
	else
	{
		echo "Error creating database: " .mysqli_error($conn);
	}
	}
	
	}
				else
				{
					header('location: /rljit_cse/login.html');
				}
?>
