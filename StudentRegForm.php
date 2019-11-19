
<?php 


    $servername = "localhost";
	$username="root";
	$password="";
	$dbname="rljit_cse";
	
	$sname=$_POST['sname'];
	$usn=$_POST['usn'];
	$email=$_POST['email'];
	$sdob=$_POST['sdob'];
	$sph=$_POST['sph'];
	$father=$_POST['father'];
	$sfph=$_POST['sfph'];
	$syear=$_POST['syear'];
	$sx=$_POST['sx'];
	$sxyop=$_POST['sxyop'];
	$sxii=$_POST['sxii'];
	$sxiiyop=$_POST['sxiiyop'];
	$si=$_POST['si'];
	$sii=$_POST['sii'];
	$siii=$_POST['siii'];
	$siv=$_POST['siv'];
	$sv=$_POST['sv'];
	$svi=$_POST['svi'];
	$svii=$_POST['svii'];
	$sviii=$_POST['sviii'];
	
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
    $conn1 = mysqli_connect($servername,$username,$password,$dbname);
    if ($conn)
	{
		//echo "***** Database Connected *****";
		
	}
	else
	{
		//echo " Error creating database: " .mysqli_error($conn);
		echo '<script type="text/javascript">alert("Error creating database"); 	window.location = "/rljit_cse/StudentRegForm.html";</script>';
	}
	
	$check_duplicate="SELECT * FROM student WHERE email  = '$email'";
	
	$result=mysqli_query($conn,$check_duplicate);
	
	$count=mysqli_num_rows($result);
	
	if($count>0)
	{
		//echo "<h4>Mail is already taken. Please use another Mail</h4>";
		echo '<script type="text/javascript">alert("Mail is already taken. Please use another Mail"); 	window.location = "/rljit_cse/index.html";</script>';
	}
	else
	{
	//
	
	$sql= "insert into student (sname,usn,email,sdob,sph,father,sfph,syear,sx,sxyop,sxii,sxiiyop,si,sii,siii,siv,sv,svi,svii,sviii) values ('$sname','$usn','$email','$sdob','$sph','$father','$sfph','$syear','$sx','$sxyop','$sxii','$sxiiyop','$si','$sii','$siii','$siv','$sv','$svi','$svii','$sviii')";
	
	$check=mysqli_query($conn, $sql);
	
	if($check)
	{
		echo '<script type="text/javascript">alert("Registration Successfull"); 	window.location = "/rljit_cse/index.html";</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Error"); 	window.location = "/rljit_cse/index.html";</script>';
	}
	}
?>
